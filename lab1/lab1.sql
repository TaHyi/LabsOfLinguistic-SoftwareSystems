--
-- MySQL 5.6.17
-- Thu, 17 Dec 2015 23:10:54 +0000
--

CREATE TABLE `accountstb` (
   `id` int(11) not null auto_increment,
   `username` varchar(50),
   `password` varchar(20),
   `acctype` varchar(50) not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

INSERT INTO `accountstb` (`id`, `username`, `password`, `acctype`) VALUES ('1', 'TaHyi', 'admin', 'admin');

CREATE TABLE `accounttypetb` (
   `Account_Type_ID` int(11) not null,
   `Account_Type` varchar(50),
   PRIMARY KEY (`Account_Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- [Table `accounttypetb` is empty]

CREATE TABLE `addresstb` (
   `Address_ID` int(11) not null auto_increment,
   `Address` varchar(50),
   `City` varchar(50),
   `State` varchar(50),
   `Zip_Code` int(50),
   `Country` varchar(50),
   PRIMARY KEY (`Address_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=134;

INSERT INTO `addresstb` (`Address_ID`, `Address`, `City`, `State`, `Zip_Code`, `Country`) VALUES ('1', 'sss', 'ddd', 'ddd', '22222', 'ddddd');
INSERT INTO `addresstb` (`Address_ID`, `Address`, `City`, `State`, `Zip_Code`, `Country`) VALUES ('22', 'ssss', 'wwww', 'ssss', '2222', 'ssss');
INSERT INTO `addresstb` (`Address_ID`, `Address`, `City`, `State`, `Zip_Code`, `Country`) VALUES ('133', '2', '3', '1', '1', '3');

CREATE TABLE `bankaccounttb` (
   `Account_ID` int(11) not null,
   `Customer_ID` int(11),
   `Status` bit(1),
   `Account_Type_ID` int(11),
   `Current_Balance` double,
   PRIMARY KEY (`Account_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bankaccounttb` (`Account_ID`, `Customer_ID`, `Status`, `Account_Type_ID`, `Current_Balance`) VALUES ('1', '932', '1', '2', '0');
INSERT INTO `bankaccounttb` (`Account_ID`, `Customer_ID`, `Status`, `Account_Type_ID`, `Current_Balance`) VALUES ('3', '9', '1', '0', '223');
INSERT INTO `bankaccounttb` (`Account_ID`, `Customer_ID`, `Status`, `Account_Type_ID`, `Current_Balance`) VALUES ('32', '987', '1', '32', '54345');

CREATE TABLE `cardtb` (
   `Card_ID` int(11) not null,
   `Card_Reg_Date` date,
   `Account_ID` int(11),
   `Card_Type_ID` int(11),
   PRIMARY KEY (`Card_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cardtb` (`Card_ID`, `Card_Reg_Date`, `Account_ID`, `Card_Type_ID`) VALUES ('9', '2001-10-20', '8329', '92');
INSERT INTO `cardtb` (`Card_ID`, `Card_Reg_Date`, `Account_ID`, `Card_Type_ID`) VALUES ('11', '2002-10-20', '32', '0');

CREATE TABLE `cardtypetb` (
   `Card_Type_ID` int(11) not null,
   `Card_Type` varchar(50),
   PRIMARY KEY (`Card_Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- [Table `cardtypetb` is empty]

CREATE TABLE `customertb` (
   `Customer_ID` int(11) not null,
   `Address_ID` int(11),
   `First_Name` varchar(50),
   `Other_Name` varchar(50),
   `Last_Name` varchar(50),
   `Birth_Date` date,
   `Reg_Date` date,
   `Telephone` varchar(20),
   `Passport_Number` varchar(20),
   PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `customertb` (`Customer_ID`, `Address_ID`, `First_Name`, `Other_Name`, `Last_Name`, `Birth_Date`, `Reg_Date`, `Telephone`, `Passport_Number`) VALUES ('1', '3', 'Pham', 'Thi', 'Thanh Huyen', '0000-00-00', '2002-10-20', '8900003200', 'B3234123');

CREATE TABLE `transactiontb` (
   `Transaction_ID` int(11) not null,
   `Account_ID` int(11),
   `Transaction_Type_ID` int(11),
   `Transaction_Date_Time` timestamp,
   `Transaction_Amount` float,
   PRIMARY KEY (`Transaction_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transactiontb` (`Transaction_ID`, `Account_ID`, `Transaction_Type_ID`, `Transaction_Date_Time`, `Transaction_Amount`) VALUES ('121', '3214', '3213', '', '0');

CREATE TABLE `transactiontypetb` (
   `Transaction_Type_ID` int(11) not null,
   `Transaction_Type` varchar(50),
   PRIMARY KEY (`Transaction_Type_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transactiontypetb` (`Transaction_Type_ID`, `Transaction_Type`) VALUES ('3213', 'we');