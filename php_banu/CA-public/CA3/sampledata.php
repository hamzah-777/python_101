<?php
require_once "1_dbconnect.php";
// preset data for testing purpose.. and easy data insertion

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('James Bond','bond@gmail.com','php123','2000-01-01','LPU PUNJAB', 123123123, '127.0.0.1', 'HTML Design Fest', '2020-11-20 14:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('James Wesly','abc@yahoo.com','php123','2002-01-01','LPU PUNJAB', 123123123, '127.0.0.1', 'LPU Clash of Hackers', '2020-11-26 16:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Sean Paul','abcd@gmail.com','php123','2003-01-01','DELHI UNIVERSITY', 123123223, '127.0.0.1', 'LPU Clash of Hackers', '2020-11-26 16:30:00', 'Phagwara College');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Dean Mall','abcddd@yahoo.com','php123','2002-04-01','LPU PUNJAB', 123123123, '127.0.0.1', 'HTML Design Fest', '2020-11-20 14:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Saritha Meen','abc12@gmail.com','php123','2002-01-01','DELHI UNIVERSITY', 123123123, '127.0.0.1', 'HTML Design Fest', '2020-11-20 14:30:00', 'Phagwara College');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Harry Potter','hp@lpu.com','php123','1994-01-01','JALANDHAR COLLEGE', 123123123, '127.0.0.1', 'HTML Design Fest', '2020-11-26 16:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Haely Sarr Bond','heyy@lpu.in','php123','1999-01-01','JALANDHAR COLLEGE', 123123123, '127.0.0.1', 'PHP Code Fiesta', '2020-12-10 12:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('James Carol','james@outlook.com','php123','1999-04-01','JALANDHAR COLLEGE', 123123123, '127.0.0.1', 'Codeblocks Heroes', '2020-11-20 14:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Krishh Bond','krrs@lpu.com','php123','1992-01-01','LPU PUNJAB', 123123123, '127.0.0.1', 'Codeblocks Heroes', '2020-12-10 12:30:00', 'LPU Main Hall');";
$conn->query($sql);

$sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Baada Shaa','bad@lpu.in','php123','1992-01-01','JALANDHAR COLLEGE', 166123123, '127.0.0.1', 'C++ Code Masters', '2020-12-10 12:30:00', 'LPU Main Hall');";
$conn->query($sql);

header( 'refresh:0; url=index.php' ); return;