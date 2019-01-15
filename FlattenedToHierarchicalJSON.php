<? php

function prepareData() {
	$arrFlattenedJson = json_decode( '[{"id": 8,"parent": 4,"name": "Food & Lifestyle"},{"id": 2,"parent": 1,"name": "Mobile Phones"},{"id": 1,"parent": 0,"name": "Electronics"},{"id": 3,"parent": 1,"name": "Laptops"},{"id": 5,"parent": 4,"name": "Fiction"},{"id": 4,"parent": 0,"name": "Books"},{"id": 6,"parent": 4,"name": "Non-fiction"},{"id": 7,"parent": 1,"name": "Storage"}]', true );

	$arrstrHierarchicalOutput = createHierarchicalJson( $arrFlattenedJson );
	print_r( json_encode( $arrstrHierarchicalOutput ) );
	// We can verify output on https://jsoneditoronline.org/
	
}

function createHierarchicalJson( array $arrFlattenedJson, $parentId = 0 ) {
  foreach( $arrFlattenedJson as $strJsonValue ) {
     if( $strJsonValue['parent'] == $parentId ) {
        $children = createHierarchicalJson( $arrFlattenedJson, $strJsonValue['id'] );
        if( $children ) {
           $strJsonValue['children'] = $children;
        }
        $arrstrHierarchicalOutput[] = $strJsonValue;
     }
  }
  return $arrstrHierarchicalOutput;
}

prepareData();
?>