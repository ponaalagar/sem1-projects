#include<stdio.h>
int main()

{
int heights[30],n,i,sum=0;
float avg;

printf("enter the number of elements:");
scanf("%d",&n);

for(i=0;i<n;i++)
{
	printf("element %d:",i);
	scanf("%d",&heights[i]);
	
	sum =sum +heights[i];
	
}

printf("sum: %d",sum);
printf("avg:%f",((float)sum/n));

}
