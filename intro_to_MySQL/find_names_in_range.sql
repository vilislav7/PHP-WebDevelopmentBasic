
select concat(first_name, ' ', middle_name, ' ', last_name) as full_name from employees
where salary in (12500, 14000, 23600, 25000);