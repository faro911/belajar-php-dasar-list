<?php

//syntak for
// for(init state;kondisi;poststatement){
    //block perulangan
//}


for( $counter = 1 ; $counter<=10 ; $counter++ ){
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}
for( $counter = 10 ; $counter>=1 ; $counter-- ){
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

//syntk alternative
for( $counter = 1 ; $counter<=5 ; $counter++ ) :
    echo "ini adalah for loop syntx alternatv ke-$counter" . PHP_EOL;
endfor;