#include<stdio.h>
int main()
{
	int a=0,i,n;
	scanf("%d",&n);
	for(i=2;i<n;i++)
	{
		if(n%i==0)
		a=a+1;
	}
	if (a>0)
	printf("%d is not a prime number\n",n);
	else
	printf("%d is a prime number\n",n);
}
