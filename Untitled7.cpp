#include<stdio.h>
int main()
{
	int n,f=1,i;
	printf("Enter the number: ");
	scanf("%d",&n);
	do
	{
		f=n*f;
		n--;
	}while(n>1);
	
	printf("Factorial: %d ",f);
}
