select distinct salary from employees
order by salary;

-- or

select salary from employees
group by salary
order by salary;