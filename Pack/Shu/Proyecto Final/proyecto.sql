

create table categoria(
	idCategoria serial not null primary key,
	nombreCategoria varchar(30) not null,
	descripcionCategoria varchar(256) not null
);

create table platillo(
	idPlatillo serial not null primary key,
	nombrePlatillo varchar(30) not null,
	descripcionPlatillo varchar(256) not null,
	precioPlatillo decimal(10,2) not null,
	idCategoria int not null,
	foreign key(idCategoria) references categoria(idCategoria)on update cascade on delete cascade
);

create table puesto(
	idPuesto serial not null primary key,
	nombrePuesto varchar(30) not null,
	descripcionPuesto varchar(256) not null
);

create table personal(
	idPersonal serial not null primary key,
	nombre varchar(30) not null,
	paterno varchar(30) not null,
	materno varchar(30) not null, 
	fechaNacimiento date not null,
	idPuesto int not null, 
	foreign key(idPuesto) references puesto(idPuesto)on update cascade on delete cascade
);

create table acceso(
	idAcceso serial not null primary key,
	idPersonal int not null,
	nombreUsuario varchar(32) unique not null,
	clavePersonal varchar(32) not null,
	foreign key(idPersonal) references personal(idpersonal)on update cascade on delete cascade
);

create table envio(
	idEnvio serial not null primary key,
	calle varchar(50) not null, 
	numeroCalle varchar(5) not null,
	numeroInterior varchar(5), 
	colonia varchar(32) not null,
	codigoPostal varchar(6) not null,
	municipio varchar(30) not null,
	estado varchar(20) not null,
	pais varchar(30) not null
);

create table cuenta(
	idCuenta serial not null primary key,
	nombreCliente varchar(256) not null,
	idEnvio int,
	propina decimal(10,2) not null,
	total decimal(10,2) not null,
	fecha date not null,
	foreign key(idEnvio) references envio(idEnvio)on update cascade on delete cascade
);

create table pedido(
	idPedido serial not null primary key,
	idCuenta int not null,
	idPersonal int not null,
	numeroMesa int not null,
	foreign key(idPersonal) references personal(idPersonal)on update cascade on delete cascade,
	foreign key(idCuenta) references cuenta(idCuenta)on update cascade on delete cascade
);

create table platilloPedido(
	idPlatillo int not null,
	idPedido int not null, 
	cantidad int not null,
	foreign key(idPlatillo) references platillo(idPlatillo)on update cascade on delete cascade, 
	foreign key(idPedido) references pedido(idPedido)on update cascade on delete cascade
);