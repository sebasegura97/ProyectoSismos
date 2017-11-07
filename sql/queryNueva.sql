CREATE TABLE Inspeccion(
	id_inspeccion int identity (1,1) not null,
	municipio varchar(30) null,
	domicilio varchar(30) null,
	telefono int null,
	num_pisos int null,
	num_sotanos int null,
	num_u_nohab int null,
	area_planta float null,
	tipo_constr varchar(30)null,
	latitud float null,
	longitud float null,
	fecha_inspec datetime null,
	--califAnt char null,
	--inspecAnt int null,
	--fechAnt datetime null,
	dni_inspec int not null, --Clave foranea
	id_eval_rap int not null, --Clave foranea
	id_eval_det int not null, --Clave foranea
	)

CREATE TABLE Inspector(
	dni int not null,
	usuario varchar(50) null,
	clave varchar(50) null,
	nombre varchar(20) null,
	apellido varchar(20) null,
	afiliacion varchar(20) null,
	fecha_reg datetime null,
	ocupacion varchar(30) null,
	id_adm int not null,
	)

CREATE TABLE Administrador(
	id_adm int identity(1,2) not null,
	usuario varchar(50) null,
	clave varchar(50) null,
	nombre varchar(50) null,
	apellido varchar(50) null,
	);
	GO
CREATE TABLE EvaluacionDetallada(
		id_eval_det int identity(1,1) not null, 
		id_accion_adicional int null,
		colapso int null,
        inclinacion int null,
        otroTxtPG varchar(30) null,
        otroValorPG int null,
        comentarioPG varchar(100) null,
        fundaciones int null,
        techos int null,

        columnas int null,
        diafragmas int null,
        conexiones int null,
        otroTxtPE varchar(30) null,
        otroValorPE int null,
        comentarioPE varchar(100) null,

        parapetos int null,
		revestimientos int null,
        cielorrasos int null,

        tabiques int null,
        ascensores int null,
		escaleras int null,
        electricidad int null,

        otroTxtPNE varchar(30) null,
        otroValorPNE int null,
        comentarioPNE varchar(100) null,

        falla int null,
        movimiento int null,
        otroTxtPGE varchar(30) null,
        otroValorPGE int null,
        pcomentarioPGE varchar(100) null,

        comentarioGRAL varchar(100) null,
	)

CREATE TABLE EvaluacionRapida(
	id_eval_rap int identity(1,1) not null,
	id_accion_adicional int null,
		colapso int null,
        inclinacion int null,
        daño int null,

         peligro int null,
       movimiento int null,
          otroTxt varchar(50) null,
			otroValor int null, 
        comentarios varchar(50) null,
        dañoEstimado varchar(20) null,) ;

CREATE TABLE AccionesAdicionales(
		id_accion_ad int identity(1,1) not null,
		aa_req_Barricada bit null,
        aa_req_EvalIng bit null, 
        aa_req_EvalEst bit null, 
         aa_req_EvalGeo bit null, 
          aa_req_otro bit null, 
        aa_req_otroTxt varchar(50) null, 
         aa_req_reco bit null, 
        aa_req_recoTxt varchar(50) null,
         aa_comentarios varchar(50) null);	

alter table inspeccion with check add constraint pk_inspeccion primary key(id_inspeccion)
alter table inspector with check add constraint pk_inspector primary key(dni)
alter table administrador with check add constraint pk_admin primary key(id_adm)
alter table EvaluacionDetallada with check add constraint pk_eval_det primary key(id_eval_det)
alter table EvaluacionRapida with check add constraint pk_eval_rap primary key(id_eval_rap)
alter table AccionesAdicionales with check add constraint pk_acc_ad primary key(id_accion_ad)

alter table inspector with check add constraint fk_inspectores foreign key(id_adm) references administrador(id_adm)
alter table inspeccion with check add constraint fk_dni_inspeccion foreign key(dni_inspec) references inspector(dni)
alter table inspeccion with check add constraint fk_eval_rap_inspeccion foreign key(id_eval_rap) references EvaluacionRapida(id_eval_rap)
alter table inspeccion with check add constraint fk_eval_det_inspeccion foreign key(id_eval_det) references EvaluacionDetallada(id_eval_det)
alter table EvaluacionRapida with check add constraint fk_eval_rapida foreign key(id_accion_adicional) references AccionesAdicionales(id_accion_ad)
alter table EvaluacionDetallada with check add constraint fk_eval_det foreign key(id_accion_adicional) references AccionesAdicionales(id_accion_ad)

create proc sp_insert_administrador
	
@usuario varchar(50), 
@clave varchar(50), 
@nombre varchar(50) ,
@apellido varchar(50) 

as

insert Administrador(usuario, clave, nombre, apellido)
values(@usuario,@clave,@nombre,@apellido)

create proc sp_insert_inspector

@dni int,
@usuario varchar(50),
@clave varchar(50), 
@nombre varchar(20), 
@apellido varchar(20),
@afiliacion varchar(20), 
@fecha_reg datetime, 
@ocupacion varchar(30), 
@id_adm int

as 

insert inspector(dni, usuario, clave, nombre, apellido, afiliacion, fecha_reg, ocupacion, id_adm) 
values(@dni,@usuario,@clave,@nombre,@apellido,@afiliacion,@fecha_reg,@ocupacion,@id_adm)

create proc sp_insert_inspeccion

@municipio varchar(30),
@domicilio varchar(30),
@telefono int,
@num_pisos int,
@num_sotanos int,
@num_u_nohab int,
@area_planta float,
@tipo_constr varchar(30),
@latitud float,
@longitud float,
@fecha_inspec datetime,
--califAnt char null,
--inspecAnt int null,
--fechAnt datetime null,
@dni_inspec int, 
@id_eval_rap int, 
@id_eval_det int 

as

insert inspeccion(municipio, domicilio, telefono, num_pisos, num_sotanos, num_u_nohab, area_planta, tipo_constr, latitud, longitud, fecha_inspec, dni_inspec, id_eval_rap, id_eval_det)
values(@municipio,@domicilio,@telefono,@num_pisos,@num_sotanos,@num_u_nohab,@area_planta,@tipo_constr,@latitud,@longitud,@fecha_inspec,@dni_inspec,@id_eval_rap,@id_eval_rap)

create proc insert_eval_det

		@id_accion_adicional int,
		@colapso int,
        @inclinacion int,
        @otroTxtPG varchar(30),
        @otroValorPG int,
        @comentarioPG varchar,
        @fundaciones int,
        @techos int,

        @columnas int,
        @diafragmas int,
        @conexiones int,
        @otroTxtPE varchar(30),
        @otroValorPE int,
        @comentarioPE varchar(100),

        @parapetos int,
		@revestimientos int,
        @cielorrasos int,

        @tabiques int,
        @ascensores int,
		@escaleras int,
        @electricidad int,

        @otroTxtPNE varchar(30),
        @otroValorPNE int,
        @comentarioPNE varchar(100),

        @falla int,
        @movimiento int,
        @otroTxtPGE varchar(30),
        @otroValorPGE int,
        @pcomentarioPGE varchar(100),

        @comentarioGRAL varchar(100)

	as

	insert EvaluacionDetallada(id_accion_adicional, colapso, inclinacion, otroTxtPG, otroValorPG, comentarioPG, fundaciones, techos, columnas, diafragmas, conexiones, otroTxtPE, otroValorPE, comentarioPE, parapetos, revestimientos, cielorrasos, tabiques, ascensores, escaleras, electricidad, otroTxtPNE, otroValorPNE, comentarioPNE, falla, movimiento, otroTxtPGE, otroValorPGE, pcomentarioPGE, comentarioGRAL)
	values(@id_accion_adicional, @colapso, @inclinacion, @otroTxtPG, @otroValorPG, @comentarioPG, @fundaciones, @techos, @columnas, @diafragmas, @conexiones, @otroTxtPE, @otroValorPE, @comentarioPE, @parapetos, @revestimientos, @cielorrasos, @tabiques, @ascensores, @escaleras, @electricidad, @otroTxtPNE, @otroValorPNE, @comentarioPNE, @falla, @movimiento, @otroTxtPGE, @otroValorPGE, @pcomentarioPGE, @comentarioGRAL)

create proc sp_insert_eval_rap

@id_accion_adicional int,
@colapso int,
@inclinacion int,
@daño int,
@peligro int,
@movimiento int,
@otroTxt varchar(50),
@otroValor int, 
@comentarios varchar(50),
@dañoEstimado varchar(20)

as

insert EvaluacionRapida(id_accion_adicional, colapso, inclinacion, daño, peligro, movimiento, otroTxt, otroValor, comentarios, dañoEstimado)
values(@id_accion_adicional, @colapso, @inclinacion, @daño, @peligro, @movimiento, @otroTxt, @otroValor, @comentarios, @dañoEstimado)

create proc sp_insert_accion_ad

@aa_req_Barricada bit,
@aa_req_EvalIng bit, 
@aa_req_EvalEst bit, 
@aa_req_EvalGeo bit, 
@aa_req_otro bit, 
@aa_req_otroTxt varchar(50), 
@aa_req_reco bit, 
@aa_req_recoTxt varchar(50),
@aa_comentarios varchar(50)

as

insert AccionesAdicionales(aa_req_Barricada, aa_req_EvalIng, aa_req_EvalEst, aa_req_EvalGeo, aa_req_otro, aa_req_otroTxt, aa_req_reco, aa_req_recoTxt, aa_comentarios)
values(@aa_req_Barricada, @aa_req_EvalIng, @aa_req_EvalEst, @aa_req_EvalGeo, @aa_req_otro, @aa_req_otroTxt, @aa_req_reco, @aa_req_recoTxt, @aa_comentarios)