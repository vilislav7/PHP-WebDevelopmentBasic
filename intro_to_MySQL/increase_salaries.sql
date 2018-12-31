update employees
set salary = salary + salary * 12 / 100
where department_id in (1, 2, 4, 11);

select salary from employees;