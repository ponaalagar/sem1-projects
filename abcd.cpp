#include<stdio.h>
int main()
{
int a,b,c ;

printf("enter the value of a:");
scanf("%d",&a);
	for(b=1;b<=a;b++)
	{
		for(c=1;c<=b;c++)
		{
			printf("%d",c);
			
		}
		printf("\n");
	}
	return 0;
 }
