
create table complaint
(
    id integer primary key auto_increment,
    cmt varchar(50) not null,
    fi varchar(50) not null,
    state varchar(50) not null,
    pin integer not null,
    status varchar(30) default 'In-Progress',
    des varchar(50) not null
);


