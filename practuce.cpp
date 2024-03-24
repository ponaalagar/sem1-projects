#include<stdio.h>
#include<math.h>
int main()
{

int i,n;
printf("integer value : ");
scanf("%d",&n);
printf("\n all positive divisor of %d\n",n);
for(i=1;i<=n;i++)
{
	if(n% i==0)
{

	printf("%d\n",i);
}
}
	
} 
