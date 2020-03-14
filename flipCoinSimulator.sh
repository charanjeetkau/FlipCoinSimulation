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
counter3=1
hhhcount3=0
hhtcount3=0
hthcount3=0
thhcount3=0
httcount3=0
thtcount3=0
tthcount3=0
tttcount3=0
declare -A dictionary3
while [[ $counter3 -le $n ]]
do
R=$(( $RANDOM % 40 ))
   if [[ R -le 5 ]]
   then
      result3="HHH"
      ((hhhcount3++))
   elif [[ R -gt 5 && R -le 10 ]]
   then
      result3="HHT"
      ((hhtcount3++))
   elif [[ R -gt 10 && R -le 15 ]]
   then
      result3="HTH"
      ((hthcount3++))
   elif [[ R -gt 15 && R -le 20 ]]
   then
      result3="THH"
      ((thhcount3++))
	elif [[ R -gt 20 && R -le 25 ]]
	then
		result3="HTT"
		((httcount3++))
	elif [[ R -gt 25 && R -le 30 ]]
	then
		result3="THT"
		((thtcount3++))
	elif [[ R -gt 30 && R -le 35 ]]
	then
		result3="TTH"
		((tthcount3++))
	elif [[ R -gt 35 && R -le 40 ]]
	then
		result3="TTT"
		((tttcount3++))
   fi
dictionary3[$counter3]=$result3
((counter3++))
done
echo ${!dictionary3[@]} ' : ' ${dictionary3[@]}
hhhPercentage=`expr "scale=2;$(($hhhcount3*100))/${#dictionary3[@]}" | bc -l`
hhtPercentage=`expr "scale=2;$(($hhtcount3*100))/${#dictionary3[@]}" | bc -l`
hthPercentage=`expr "scale=2;$(($hthcount3*100))/${#dictionary3[@]}" | bc -l`
thhPercentage=`expr "scale=2;$(($thhcount3*100))/${#dictionary3[@]}" | bc -l`
httPercentage=`expr "scale=2;$(($httcount3*100))/${#dictionary3[@]}" | bc -l`
thtPercentage=`expr "scale=2;$(($thtcount3*100))/${#dictionary3[@]}" | bc -l`
tthPercentage=`expr "scale=2;$(($tthcount3*100))/${#dictionary3[@]}" | bc -l`
tttPercentage=`expr "scale=2;$(($tttcount3*100))/${#dictionary3[@]}" | bc -l`
echo "Percentage of HHH: "$hhhPercentage" %"
echo "Percentage of HHT: "$hhtPercentage" %"
echo "Percentage of HTH: "$hthPercentage" %"
echo "Percentage of THH: "$thhPercentage" %"
echo "Percentage of HTT: "$httPercentage" %"
echo "Percentage of THT: "$thtPercentage" %"
echo "Percentage of TTH: "$tthPercentage" %"
echo "Percentage of TTT: "$tttPercentage" %"
