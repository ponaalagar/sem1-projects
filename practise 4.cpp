#include <stdio.h>
#include<string.h>
void main()
{
    
    char str[50],str2[50];
    
    
   
    printf("enter string : ");
    scanf("%s",&str);
    
    printf("enter string 2:");
    scanf("%s,",&str2);
    
    strcmp(str,str2);
    
    printf("%s \n",str);
    
    return 0;
    
    
}
