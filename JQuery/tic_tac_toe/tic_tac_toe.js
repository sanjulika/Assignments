var my_turn;
$(document).ready(restart);

function restart(){
my_turn=1;
var cells=$("#ttt td");
$(cells).removeClass("selectedX");
$(cells).removeClass("selectedO");
$(cells).addClass("unselected");
$(cells).html("");
$(cells).click(turn);
$("#status").html("");
}

function turn() {
   if (my_turn == 1 && $(this).html() != "X" && $(this).html() != "O") {
      $(this).html("X");
      $(this).removeClass("unselected");
      $(this).addClass("selectedX");
      if (!won($(this))) {
         my_turn = 0;
         $(this).click(turn);	 

      }
   }
  if (my_turn == 0 && $(this).html() != "X" && $(this).html() != "O") {
      $(this).html("O");
      $(this).removeClass("unselected");
      $(this).addClass("selectedO");
      if (!won($(this))) {
         my_turn = 1;
         $(this).click(turn);	 

      }
   }

}

function won(currentItem){
var winner = false;
   var XorO = $(currentItem).html();
   console.log("Current item" + currentItem);
   var thisIndex = $(currentItem).parent().children().index($(currentItem));
   console.log("thisIndex" + thisIndex);
   var diagItems = $("#ttt td:even");
   console.log("inside won diagItems value" + $("#ttt td:even"));
   var inDiagItemsIndex = $(diagItems).index($(currentItem)); // if its in a diagonal, we check for diagonal wins
   console.log("inside won diagItems value" +inDiagItemsIndex);
   // items in this row are the same as the current item
   if ($(currentItem).siblings(":contains("+XorO+")").length == 2) {
      winner = true;
   }
   // items above and/or below
   else if ($(currentItem).parent().siblings(":first").children(":eq("+thisIndex+")").html() == XorO && $(currentItem).parent().siblings(":last").children(":eq("+thisIndex+")").html() == XorO) {
      winner = true;
   }
   else if (inDiagItemsIndex >= 0) {
      // if its in the / diagonal
      if ($(diagItems).slice(1,4).filter(":contains('"+XorO+"')").length == 3) {
         winner = true;
      }
      // if its the \ diagonal
      if ($(diagItems).filter(":even").filter(":contains('"+XorO+"')").length == 3) {
         winner = true;
      }
   }
   if (winner == true) {
      alert('winner is ' + $(currentItem).html() + '.','winner');
      $("#ttt td").unbind(); // click does nothing now
     
   }
   return winner;
}
