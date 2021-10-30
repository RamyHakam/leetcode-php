WITH CTE as (
    SELECT t1.requester_id as id ,count(DISTINCT t1.accepter_id) + count(DISTINCT t2.requester_id) as num
    FROM RequestAccepted t1  LEFT JOIN
         RequestAccepted t2 on t2.accepter_id =  t1.requester_id
    GROUP BY t1.requester_id
)

SELECT id,num
FROM CTE
ORDER BY num DESC
LIMIT 1;