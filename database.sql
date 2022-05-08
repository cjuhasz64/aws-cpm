Table users {
  id int [pk, increment] // auto-increment
  full_name varchar
  phone int
  email varchar
  created_at timestamp
}

Table stocks {
  id int
  stock_name varchar
  user_id int
  quantity int
  value float
  buy_date timestamp
}

Table bonds {
  id int
  bond_name varchar
  user_id int
  quantity int
  value float
  buy_date timestamp
}

Table realestate {
  id int
  address varchar
  user_id int
  value float
  buy_date timestamp
  description varchar
}

Table cash {
  id int
  user_id int
  value float
}

Ref: "users"."id" < "stocks"."user_id"

Ref: "users"."id" < "bonds"."user_id"

Ref: "users"."id" < "realestate"."user_id"

Ref: "users"."id" < "cash"."user_id"
