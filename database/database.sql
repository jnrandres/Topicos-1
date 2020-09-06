
CREATE TABLE usuarios (
	id_usuario	int not null auto_increment,
    nombre_completo	varchar(80) not null,
    documento varchar(10),
    password	text not null,
    correo		text not null,
    perfil text not null,
    constraint pk_usuarios primary key (id_usuario),
    constraint uq_usuarios unique (documento, correo)
);

CREATE TABLE contacto (
	id_contacto	int not null auto_increment,
    nombre_completo	varchar(80) not null,
    email text not null,
    celular	text not null,
    mensaje		text not null,
    constraint pk_contacto primary key (id_contacto)
);


CREATE TABLE historial_medico (
	id_historial	int not null auto_increment,
    documento_usuario int not null,
    enfermedades text not null,
    examenes text not null,
    operaciones	text not null,
     constraint pk_historial primary key (id_contacto)
);


CREATE TABLE especialidades (
	id_especialidad	int not null auto_increment,
    nombre text not null,
    constraint pk_especialidades primary key (id_especialidad)
);


CREATE TABLE medicos (
	id_medico	int not null auto_increment,
    nombre_completo	varchar(80) not null,
    especialidad text not null,
    codigo	text not null,
    universidad		text not null,
    constraint pk_medicos primary key (id_medico),
    constraint uq_medicos unique (codigo)
);


CREATE TABLE programar_cita (
	id_cita	int not null auto_increment,
    id_usuario int not null,
    especialidad	text not null,
    fecha text not null,
    id_medico	text not null,
    constraint fk_programar_cita_1 foreign key (id_usuario) references usuarios (id_usuario),
    constraint fk_programar_cita_2 foreign key (id_medico) references medicos (id_medico)
);


-- --------------------------------








CREATE TABLE evaluacion_covid (
	id_evaluacion	int not null auto_increment,
    id_usuario int not null,
    sintomas	text not null,
    fecha_inicio text not null,
    enfermedades	text not null,
    otros		text not null,
    constraint pk_evaluacion primary key (id_usuario),
    constraint fk_evaluacion_covid foreign key (id_usuario) references usuarios (id_usuario)
);




use clinica;

select * from medicos where medicos.especialidad = 'cardiologia';
select * from medicos;