create procedure hell5() 
begin declare di int; 
declare curr cursor for select id from cut; 
open curr;
lb1:LOOP
fetch curr into di; 
select di; 
End LOOP;
close curr; 
END;
//

