CREATE TABLE Departments(
	DepartmentID int AUTO_INCREMENT PRIMARY KEY NOT NULL ,
	DepartmentName VARCHAR(30) NOT NULL,
	Address VARCHAR(30) NOT NULL,
	Email VARCHAR(30) NOT NULL ,
	Phone VARCHAR(30) NOT NULL ,
	Logo VARCHAR(30) ,
	Website VARCHAR(30),
	ParentDepartmentId INT NOT NULL ,
	FOREIGN KEY (ParentDepartmentId) REFERENCES Departments (DepartmentId)
	
);


CREATE TABLE employees(
	EmployeeId INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	FullName VARCHAR(30) NOT NULL,
	Address VARCHAR(30) NOT NULL,
	Email VARCHAR(30) NOT NULL,
	MobilePhone VARCHAR(30) NOT NULL,
	`Position` VARCHAR(30) ,
	Avatar VARCHAR(30),
	DepartmentId INT NOT NULL,
	FOREIGN KEY (DepartmentId) REFERENCES departments(DepartmentId)
)

CREATE TABLE users(
	Username VARCHAR(30) NOT NULL,
	`Password` VARCHAR(30) NOT NULL,
	`role` VARCHAR(30) NOT NULL,
	EmployeeId INT,
	FOREIGN KEY (EmployeeId) REFERENCES employees(EmployeeId)
)