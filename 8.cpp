#include<stdio.h>
int main()
{
	int n,p=0,i=0;
	scanf("%d",&n);
	printf("Prinme numbers : ");
	while(n>1)
	{
		
		for(i=n-1;i>1;i++)
		{
			if(n%i==0)
			p=p+1;
		}
		if(p==0){
		
		printf("%d ",n);
	}
		n--;
	}
}
