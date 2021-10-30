
SELECT ROUND(
 IFNULL(
SELECT (*) FROM (SELECT DISTINCT requester_id,accepter_id FROM  RequestAccepted ) as A
           /
SELECT (*) FROM (SELECT DISTINCT sender_id,send_to_id FROM  FriendRequest ) as S
,0),2) as accept_rate