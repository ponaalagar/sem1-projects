#include<stdio.h>
int main ()
{
	int a,i ,j;
	printf("enter the value of a:");
	scanf("%d",&a);
	
	for(i=0;i<=a;i++)
	{
		printf("%d\n",i);
	for(j=0;j<=i;j++)
					{
						printf("%d",j);
					}

	}
	return 0;
}
