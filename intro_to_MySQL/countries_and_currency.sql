select country_name, country_code, if(currency_code = "EUR", "Euro", "Not Euro") from countries
order by country_name