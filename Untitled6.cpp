#include<stdio.h>
int main()
{
	int n,sum=0;
	scanf("%d",&n);
	while(n>0)
	{
		sum=sum+n;
		n--;
	}
	printf("sum of natural numbers is %d",sum);
	
}
