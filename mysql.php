create table users(
id	int(11) not null auto_increment,
status	varchar(20) not null default 'active',
nickname	varchar(50) not null,
name	varchar(50) not null,
email	varchar(254) not null,
password	varchar(128) not null,
image_name	varchar(100) default null,
created_at	datetime not null default current_timestamp,
updated_at	datetime not null default current_timestamp,
primary key(id),
key(status),
key(nickname),
key(name),
key(email)
) engine=InnoDB ;


create table tweets(
id	int(11) not null auto_increment,
status	varchar(20) not null default 'active',
user_id	int(11) not null,
body	varchar(140) not null,
image_name	varchar(500) default null,
created_at	datetime not null default current_timestamp,
updated_at	datetime not null default current_timestamp,
primary key(id),
key(status),
key(user_id),
key(body)
) engine=InnoDB;

create table likes(
id	int(11) not null auto_increment,
status	varchar(20) not null default 'active',
user_id	int(11) not null,
tweet_id	int(11) not null,
created_at	datetime not null default current_timestamp,
updated_at	datetime not null default current_timestamp,
primary key(id),
key(status),
key(user_id),
key(tweet_id),
)engine=InnoDB;

create table follows(
id	int(11) not null auto_increment,
status	varchar(20) not null default 'active',
follow_user_id	int(11) not null,
followed_user_id	int(11) not null.
created_at	datetime not null default current_timestamp,
updated_at	datetime not null default current_timestamp,
primary key(id),
key(status),
key(follow_user_id),
key(followed_user_id)
)engine=InnoDB;

create table notification(
id	int(11) not null auto_increment,
status	varchar(20) not null default 'active',
received_user_id	int(11) not null,
sent_user_id	int(11) not null,
message	varchar(50) not null,
created_at	datetime not null default current_timestamp,
updated_at	datetime not null default current_timestamp,
primary key(id),
key(status),
key(received_user_id),
key(sent_user_id)
)engine=InnoDB;