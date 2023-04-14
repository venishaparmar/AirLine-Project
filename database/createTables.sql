create table reservation (r_id decimal(5,0) primary key,p_id decimal(5,0) , f_id decimal(5,0), seat_num int, r_date date); 

create table passenger (p_id decimal(5,0) primary key, p_num decimal(10,0), p_name varchar(41), 
title varchar(45), p_email varchar(45), age int, r_id decimal(5,0));

create table user (u_email varchar(45) primary key, password varchar(45),  bod date, u_name varchar(45),
surname varchar(45), u_num  decimal(10,0));

create table ticket (t_id decimal(5,0) primary key, f_id decimal(5,0), p_id decimal(5,0), ti_class char);

create table payment (pay_id decimal(5,0) primary key , p_id decimal(5,0) , pay_method varchar(41) , pay_amount decimal(5,0), f_id decimal(5,0));

create table flight (f_id decimal(5,0) primary key, origin varchar(45), destination varchar(45), f_date date, dep_time time, arrival_time time,
prices decimal(5,0));
