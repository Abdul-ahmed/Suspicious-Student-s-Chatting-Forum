CREATE TABLE admin (username varchar(25), password varchar(25));

INSERT INTO `admin`(`username`, `password`) VALUES ('Admin','LOVElog9.');

CREATE TABLE admin_post (id int(11) primary key AUTO_INCREMENT not null, title varchar(1000) not null, category varchar(1000), year varchar(225), comment text, author varchar(255) not null, date varchar(255) not null, time varchar(255) not null);

CREATE TABLE students (id int(11) primary key AUTO_INCREMENT not null, firstname varchar(255) not null, lastname varchar(255) not null, othername varchar(225) not null, matric varchar(255) not null, password varchar(255) not null);

CREATE TABLE disabletable (id int(11) primary key AUTO_INCREMENT not null, firstname varchar(255) not null, lastname varchar(225) not null, othername varchar(225) not null, matric varchar(225) not null, password varchar(225) not null, imagename varchar(225) not null, studentid int(11));



INSERT INTO `students`(`matric`, `password`) VALUES ('ND/17/COM/FT/184','LOVElog9.');

UPDATE `students` SET `id`=1,`firstname`='Abdulahmed',`lastname`='Abdulhakeem',`othername`='Olayiwola' WHERE id = 1



CREATE TABLE commenttable (id int(11) primary key not null AUTO_INCREMENT, comment varchar(1000) not null, author varchar(255) not null, date varchar(255) not null, time varchar(255) not null, postid int(11) not null);




ALTER TABLE commenttable
ADD FOREIGN KEY (postid)
REFERENCES admin_post(id)


INSERT INTO `students`(`firstname`, `lastname`, `othername`, `matric`, `password`) VALUES ('ABDULWASIU', 'ABDULGANIYU', '', 'ND/17/COM/FT/111', '07064898311');

INSERT INTO `students`(`firstname`, `lastname`, `othername`, `matric`, `password`) VALUES ('MOSHOOD', 'MURITALA', 'ABIOLA', 'ND/17/COM/FT/112', '08184864681');

INSERT INTO `students`(`firstname`, `lastname`, `othername`, `matric`, `password`) VALUES ('BOLA', 'LUKUMAN', 'ADEKUNLE', 'ND/17/COM/FT/113', '08188495610');

INSERT INTO `students`(`firstname`, `lastname`, `othername`, `matric`, `password`) VALUES ('ABIGEAL', 'OGUNWALE', 'OLUWAFUNMILAYO', 'ND/17/COM/FT/114', '08189719298');

INSERT INTO `students`(`firstname`, `lastname`, `othername`, `matric`, `password`) VALUES ('OLALEKAN', 'AKOMOLAFE', 'IDRIS', 'ND/17/COM/FT/115', '09035200231');



ALTER TABLE students ADD image blob;
ALTER TABLE students ADD imagename varchar(255);
ALTER TABLE students DROP COLUMN image;

UPDATE admin SET imagename = 'img/logo1.png' WHERE id = 1;
UPDATE students SET imagename = 'img/pic.jpg' WHERE id = 1;
UPDATE students SET imagename = 'img/358passport_D2474712.jpg' WHERE id = 2;
UPDATE students SET imagename = 'img/360passport_D4906370.jpg' WHERE id = 4;
UPDATE students SET imagename = 'img/361passport_D3990374.jpg' WHERE id = 3;

UPDATE students SET image = '(LOAD_FILE(C:\xampp\htdocs\kpsf.com\img\358passport_D2474712.jpg))' WHERE id = 2;
UPDATE students SET image = '(LOAD_FILE(C:\xampp\htdocs\kpsf.com\img\360passport_D4906370.jpg))' WHERE id = 4;
UPDATE students SET image = '(LOAD_FILE(C:\xampp\htdocs\kpsf.com\img\361passport_D3990374.jpg))' WHERE id = 3;


UPDATE students SET image = 'C:\xampp\htdocs\kpsf.com\img\358passport_D2474712.jpg' WHERE id = 2;
UPDATE students SET image = 'C:\xampp\htdocs\kpsf.com\img\360passport_D4906370.jpg' WHERE id = 4;
UPDATE students SET image = 'C:\xampp\htdocs\kpsf.com\img\361passport_D3990374.jpg' WHERE id = 3;






<a href="#">
                <li class="item-menu">
                    <i class="fas fa-vial"></i>
                    <span class="menu">Science Lab Tech</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">
                    <i class="fas fa-sitemap"></i>
                    <span class="menu">Architectural Tech</span>
                </li>
            </a>    
            <a href="#">
                <li class="item-menu">
                    <i class="fas fa-tractor"></i>
                    <span class="menu">Agricultural Tech</span>
                </li>
            </a> 
            <a href="#">
                <li class="item-menu">
                    <i class="fas fa-cogs"></i>
                    <span class="menu">Metallurgical Tech</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">
                    <i class="fas fa-charging-station"></i>
                    <span class="menu">Electrical Engr</span>
                </li>
            </a>
            <a href="#">
                <li class="item-menu">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="menu">Accountancy</span>
                </li>
            </a>