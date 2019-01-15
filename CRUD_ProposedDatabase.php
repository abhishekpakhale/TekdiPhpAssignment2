Due to the limited time I was not able to normalize database. So providing the proposed database architecture:

Total 4 tables:
1) phone_types
id( primary key )
type_id
name( priamry, secondary etc )
created_by
created_on

2) user_phone_numbers
id( primary key )
phone_type_id( forgein key references to phone_types )
user_id( forgein key references to users )
created_by
created_on
updated_by
updated_on

3) users
id( primary key )
first_name,
middle_name,
last_name,
preferred_name,
full_name,
country_code( forgein key references to country_codes ),
email_address,
about_you,
date_of_birth,
created_by
created_on
updated_by
updated_on

4) country_codes
id( primary key ),
code( IN, USA, CA etc ),
name,
created_by,
created_on