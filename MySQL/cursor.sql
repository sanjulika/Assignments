delimiter //
create procedure democur4()
begin
declare id,marks int default 0;
declare fname,lname varchar(20);
declare cur2 cursor for select * from cut;
open cur2;
lb1: LOOP
fetch cur2 into id,fname,lname,marks;
select @id;

END LOOP;
CLOSE cur2;
END;




