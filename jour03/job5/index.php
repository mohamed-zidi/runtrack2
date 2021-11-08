<?php
$str="On n\'est pas le meilleur quand on le croit mais quand on le sait";
$dic=[
'consonnes' => ['B,C,D,F,G,H,J,K,L,M,N,P,Q,R,S,T,V,W,X,Z,b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,z'],
'voyelles' => ['a,e,i,o,u,y,A,E,I,O,U,Y']
];

$consonnesoccurences=0;
$voyellesoccuruences=0;

foreach($dic['consonnes'] as $consonnes)
foreach($dic['voyelles'] as $voyelles)

for($i=0;isset($str[$i]);$i++){
    for($j=0;isset($consonnes[$j]);$j++){
        if($str[$i]==$consonnes[$j]){
            $consonnesoccurences++;
        }
    }
}
for ($i=0;isset($str[$i]);$i++) {
    for($v=0;isset($voyelles[$v]);$v++){
        if($str[$i]==$voyelles[$v]){
            $voyellesoccuruences++;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th><?php echo'Consonnes' ?></th>
            <th><?php echo 'Voyelles' ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?php echo $voyellesoccuruences ?></th>
            <th><?php echo $consonnesoccurences ?></th>
        </tr>
    </tbody>
</table>    

</body>
</html>