create table signup(
id int auto_increment,
username varchar(50) NOT NULL,
email varchar(50) ,
mobileno varchar(15) ,
password varchar(40) ,
primary key(id)
);

insert into signup values('','ganghadharunp','samplemail@gmail.com','9999988888','UNPGanghadhar1');
insert into signup values('','kranthisandhi','samplemail@gmail.com','8888899999','Kranthi@sandhi1');
insert into signup values('','rajavikram','samplemail@gmail.com','9999922222','RajaVikram1');
insert into signup values('','pawankumar','samplemail@gmail.com','2222299999','PawanKumar1');
insert into signup values('','laxminarayana','samplemail@gmail.com','8888888888','LaxmiNarayana@M1');


create table results_admin(
id int auto_increment,
username varchar(50) NOT NULL,
email varchar(50) ,
mobileno varchar(15) ,
password varchar(40) ,
primary key(id)
);

insert into results_admin values('','PrathapChandra','prathap.chandra.754@gmail.com','9999999999','CodeFun1');
