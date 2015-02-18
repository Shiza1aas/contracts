create table corridor_info
(
    corridor_covered text,
    p_des_data int,
    d_des_data int,
    time_elapsed int,
    physical_progres int,
    package_progress int,
    lot_name varchar(100),
    foreign key(lot_name) references lot_info(lot_name)
    on delete cascade on update cascade,
    contract_package varchar(100),
    foreign key(contract_package) references contract_info(contract_package)
    on delete cascade on update cascade
    
);