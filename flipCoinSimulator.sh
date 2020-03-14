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
counter=1
hhcount=0
htcount=0
thcount=0
ttcount=0
declare -A dictionary2
while [[ $counter -le $n ]]
do
R=$(( $RANDOM % 20 ))
   if [[ R -le 5 ]]
   then
      result="HH"
      ((hhcount++))
   elif [[ R -gt 5 && R -le 10 ]]
	then
      result="HT"
      ((htcount++))
	elif [[ R -gt 10 && R -le 15 ]]
	then
		result="TH"
		((thcount++))
	elif [[ R -gt 15 && R -le 20 ]]
	then
		result="TT"
		((ttcount++))
   fi
dictionary2[$counter]=$result
((counter++))
done
echo ${!dictionary2[@]} ' : ' ${dictionary2[@]}
hhPercentage=`expr "scale=2;$(($hhcount*100))/${#dictionary2[@]}" | bc -l`
htPercentage=`expr "scale=2;$(($htcount*100))/${#dictionary2[@]}" | bc -l`
thPercentage=`expr "scale=2;$(($thcount*100))/${#dictionary2[@]}" | bc -l`
ttPercentage=`expr "scale=2;$(($ttcount*100))/${#dictionary2[@]}" | bc -l`
echo "Percentage of HH: "$hhPercentage" %"
echo "Percentage of HT: "$htPercentage" %"
echo "Percentage of TH: "$thPercentage" %"
echo "Percentage of TT: "$ttPercentage" %"
