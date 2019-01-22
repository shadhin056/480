CREATE DATABASE Customer;

create table customer (
Customer_name varchar(15), Customer_street varchar(15), Customer_city varchar(15)
);
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

create table branch (
Branch_name varchar(12),
Branch_city varchar(12),
Assets int
);
insert into branch values('Downtown','Brooklyn',900000);
insert into branch values('Redwood','Palo Alto',2100000);
insert into branch values('Perryridge','Horseneck',1700000);
insert into branch values('Mianus','Horseneck',400200);
insert into branch values('Round Hill','Horseneck',8000000);
insert into branch values('Pownal','Bennington',400000);
insert into branch values('North Town','Rye',3700000);
insert into branch values('Brighton','Brooklyn',7000000);


create table account (
Account_number varchar(15),
Branch_name varchar(12),
Balance int
);
insert into account values('A-101','Downtown',500);
insert into account values('A-215','Mianus',700);
insert into account values('A-102','Perryridge',400);
insert into account values('A-305','Round Hill',350);
insert into account values('A-201','Perryridge',900);
insert into account values('A-222','Redwood',700);
insert into account values('A-217','Brighton',750);


create table depositor (
Customer_name varchar(15),
Account_number varchar(15)
);
insert into depositor values('Johnson','A-101');
insert into depositor values('Smith','A-215');
insert into depositor values('Hayes','A-102');
insert into depositor values('Turner','A-305');
insert into depositor values('Johnson','A-201');
insert into depositor values('Jones','A-217');
insert into depositor values('Lindsay','A-222');

create table loan(
Loan_number varchar(12),
Branch_name varchar(12),
Amount int
);
insert into loan values('L-17','Downtown',1000);
insert into loan values('L-23','Redwood',2000);
insert into loan values('L-15','Perryridge',1500);
insert into loan values('L-14','Downtown',1500);
insert into loan values('L-93','Mianus',500);
insert into loan values('L-11','Round Hill',900);
insert into loan values('L-16','Perryridge',1300);

create table borrower(
Customer_name varchar(15),
Loan_number varchar(12)
);
insert into borrower values('Jones','L-17');
insert into borrower values('Smith','L-23');
insert into borrower values('Hayes','L-15');
insert into borrower values('Jackson','L-14');
insert into borrower values('Curry','L-93');
insert into borrower values('Smith','L-11');
insert into borrower values('Williams','L-17');
insert into borrower values('Adams','L-16');




1. SELECT DISTINCT customer.Customer_name , customer.Customer_city FROM customer INNER JOIN borrower on customer.Customer_name=borrower.Customer_name WHERE customer.Customer_name=borrower.Customer_name;
2. select customer.CUSTOMER_NAME,customer.CUSTOMER_CITY from customer JOIN borrower JOIN loan where customer.Customer_name=borrower.Customer_name and borrower.Loan_number = loan.Loan_number and loan.Branch_name="Perryridge";
3. SELECT account.Account_number ,account.Balance FROM account where balance >699 and balance <901;
4. SELECT customer.Customer_name ,customer.Customer_street FROM customer WHERE Customer_street LIKE '%Hill';
5. SELECT DISTINCT depositor.Customer_name FROM depositor INNER JOIN account INNER JOIN branch INNER JOIN loan INNER JOIN borrower on depositor.Account_number=account.Account_number AND depositor.Customer_name=borrower.Customer_name AND borrower.Loan_number=loan.Loan_number WHERE account.Branch_name="Perryridge";
6. SELECT customer.Customer_name FROM customer,account,depositor WHERE account.Branch_name='Perryridge' AND account.Account_number=depositor.Account_number AND depositor.Customer_name=customer.Customer_name AND customer.Customer_name NOT IN (SELECT borrower.Customer_name FROM borrower,loan WHERE borrower.Loan_number=loan.Loan_number AND loan.Branch_name='Perryridge')
7. SELECT DISTINCT customer.Customer_name,customer.Customer_city from customer JOIN borrower WHERE customer.Customer_name=borrower.Customer_name;
8. select customer.Customer_name FROM customer INNER JOIN account INNER JOIN depositor ON customer.Customer_name=depositor.Customer_name AND depositor.Account_number=account.Account_number and account.Branch_name= (SELECT DISTINCT branch.Branch_name FROM loan JOIN branch JOIN account JOIN borrower JOIN customer JOIN depositor WHERE customer.Customer_name=depositor.Customer_name AND depositor.Account_number=account.Account_number AND customer.Customer_name=borrower.Customer_name AND account.Branch_name =branch.Branch_name AND branch.Branch_name=loan.Branch_name AND customer.Customer_name= "Hayes")
9. SELECT branch.Branch_name , branch.Assets FROM branch WHERE branch.Assets > (SELECT MIN(branch.Assets) FROM branch WHERE branch.Branch_city="Brooklyn");
10.SELECT branch.Branch_name , branch.Assets FROM branch WHERE branch.Assets > (SELECT MAX(branch.Assets) FROM branch WHERE branch.Branch_city="Brooklyn");
11.SELECT depositor.Customer_name FROM account INNER JOIN depositor on account.Account_number=depositor.Account_number WHERE account.Branch_name="Perryridge"UNION SELECT borrower.Customer_name FROM borrower INNER JOIN loan on loan.Loan_number=borrower.Loan_number WHERE loan.Branch_name="Perryridge" ORDER BY Customer_name ASC;
12.SELECT Loan_number , Branch_name , Amount FROM loan ORDER BY Amount DESC,Loan_number ASC;
13.select branch_name, avg(balance) as avg_bal from account group by branch_name;
14.SELECT account.Branch_name ,COUNT(account.Account_number) as total_account FROM account GROUP BY account.Branch_name;
15.SELECT AVG(account.Balance) FROM account;
16.select branch_name, avg(balance) as avg_bal from account group by branch_name HAVING avg_bal>700;
17.SELECT a.Bname,MAX(a.avg_balance) FROM (SELECT Branch_name AS Bname,AVG(Balance) AS avg_balance from account GROUP BY Branch_name) as a;
18.SELECT COUNT(customer.Customer_name) AS Total_customer FROM customer;
19.SELECT borrower.Customer_name FROM loan INNER JOIN borrower on loan.Loan_number=borrower.Loan_number where loan.Branch_name="downtown";
20.SELECT borrower.Customer_name from borrower INNER JOIN loan on borrower.Loan_number=loan.Loan_number where loan.Amount>1499 AND loan.Amount<2499;
21.SELECT DISTINCT customer.Customer_name from customer INNER JOIN borrower INNER JOIN loan WHERE customer.Customer_city = "Rye" AND customer.Customer_name=borrower.Customer_name AND borrower.Loan_number=loan.Loan_number;
22.SELECT loan.Branch_name,COUNT(borrower.Loan_number) AS HighestPrice FROM borrower INNER JOIN loan on borrower.Loan_number=loan.Loan_number GROUP BY loan.Branch_name;
23.SELECT DISTINCT l.Bname,MAX(l.avg_amount) FROM (SELECT loan.Branch_name as Bname,AVG(loan.Amount) AS avg_amount from loan GROUP BY loan.Branch_name) AS l;
24.select borrower.Customer_name, loan.Loan_number ,loan.Amount FROM borrower INNER JOIN loan onborrower.Loan_number=loan.Loan_number WHERE loan.Amount=(SELECT MAX(loan.Amount) FROM loan);
25.select customer.Customer_name FROM customer WHERE Customer_name LIKE 'G%';



17 with view 
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
SELECT shadhin.branch_name ,MAX(shadhin.avg_bal) as max_value FROM Shadhin
Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
select branch_name, avg(balance) as avg_bal
 from account group by branch_name






























