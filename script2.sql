create table if not exists arenatest.sports
(
    sport_id int auto_increment
        primary key,
    name     varchar(255) not null
);

create table if not exists arenatest.users
(
    user_id  int auto_increment
        primary key,
    pseudo   varchar(64)  not null,
    email    varchar(255) not null,
    password varchar(255) not null,
    type     int          not null
);

create table if not exists arenatest.bookings
(
    booking_id int auto_increment
        primary key,
    startDate  datetime             not null,
    endDate    datetime             not null,
    sport_id   int                  null,
    status     int        default 0 not null,
    user_id    int                  null,
    is_enabled tinyint(1) default 0 not null,
    constraint bookings_sports_sport_id_fk
        foreign key (sport_id) references arenatest.sports (sport_id)
            on delete set null,
    constraint bookings_users_user_id_fk
        foreign key (user_id) references arenatest.users (user_id)
            on delete cascade
);


