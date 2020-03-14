#!/bin/bash -x
read -p "Enter the number of times you wanna flip a coin: " n
count=1
headcount=0
tailcount=0
declare -A dictionary
while [[ $count -le $n ]]
do
R=$(( $RANDOM % 10 ))
	if [[ R -le 5 ]]
	then
		res="head"
		((headcount++))
	else
		res="tail"
		((tailcount++))
	fi
dictionary[$count]=$res
((count++))
done
echo ${!dictionary[@]} ' : ' ${dictionary[@]}
headPercentage=`expr "scale=2;$(($headcount*100))/${#dictionary[@]}" | bc -l`
tailPercentage=`expr "scale=2;$(($tailcount*100))/${#dictionary[@]}" | bc -l`
echo "Percentage of Heads: "$headPercentage" %"
echo "Percentage of Tails: "$tailPercentage" %"

