WITH CTE as (
    SELECT d.name as Department,
           e.name as Employee,
           e.salary as salary,
           DENSE_RANK over(
           PARTTION BY d.name
           ORDER BY salary DESC
           ) rnk
    FROM Employee as e LEFT JOIN Department as d on d.id = e.departmentId
)

SELECT Department,Employee,salary
FROM CTE
WHERE rnk <= 3;