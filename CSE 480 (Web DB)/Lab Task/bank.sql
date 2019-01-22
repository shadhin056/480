/*

nasif ahmed
bank db

*/

create table customer (
Customer_name varchar(15),
Customer_street varchar(15),
Customer_city varchar(15)
);

create table branch (
Branch_name varchar(12),
Branch_city varchar(12),
Assets int
);

create table account (
Account_number varchar(15),
Branch_name varchar(12),
Balance int
);

create table depositor (
Customer_name varchar(15),
Account_number varchar(15)
);

create table loan(
Loan_number varchar(12),
Branch_name varchar(12),
Amount int
);

create table borrower(
Customer_name varchar(15),
Loan_number varchar(12)
);

-- customer
insert into customer values('Adams','Spring','Pittsfield');
insert into customer values('Brooks','Senator','Brooklyn');
insert into customer values('Curry','North','Rye');
insert into customer values('Glenn','Sand Hill','Woodside');
insert into customer values('Green','Walnut','Stamford');
insert into customer values('Hayes','Main','Harrison');
insert into customer values('Johnson','Alma','Palo Alto');
insert into customer values('Jones','Main','Harrison');
insert into customer values('Smith','Main','Rye');
insert into customer values('Turner','Putnam','Stamford');
insert into customer values('Williams','Nassau','Princeton');


-- branch
insert into branch values('Downtown','Brooklyn',900000);
insert into branch values('Redwood','Palo Alto',2100000);
insert into branch values('Perryridge','Horseneck',1700000);
insert into branch values('Mianus','Horseneck',400200);
insert into branch values('Round Hill','Horseneck',8000000);
insert into branch values('Pownal','Bennington',400000);
insert into branch values('North Town','Rye',3700000);
insert into branch values('Brighton','Brooklyn',7000000);


-- account
insert into account values('A-101','Downtown',500);
insert into account values('A-215','Mianus',700);
insert into account values('A-102','Perryridge',400);
insert into account values('A-305','Round Hill',350);
insert into account values('A-201','Perryridge',900);
insert into account values('A-222','Redwood',700);
insert into account values('A-217','Brighton',750);



-- depositor
insert into depositor values('Johnson','A-101');
insert into depositor values('Smith','A-215');
insert into depositor values('Hayes','A-102');
insert into depositor values('Turner','A-305');
insert into depositor values('Johnson','A-201');
insert into depositor values('Jones','A-217');
insert into depositor values('Lindsay','A-222');



-- loan
insert into loan values('L-17','Downtown',1000);
insert into loan values('L-23','Redwood',2000);
insert into loan values('L-15','Perryridge',1500);
insert into loan values('L-14','Downtown',1500);
insert into loan values('L-93','Mianus',500);
insert into loan values('L-11','Round Hill',900);
insert into loan values('L-16','Perryridge',1300);


-- borrower
insert into borrower values('Jones','L-17');
insert into borrower values('Smith','L-23');
insert into borrower values('Hayes','L-15');
insert into borrower values('Jackson','L-14');
insert into borrower values('Curry','L-93');
insert into borrower values('Smith','L-11');
insert into borrower values('Williams','L-17');
insert into borrower values('Adams','L-16');
