#include <stdio.h>

void implimentFirstFit(int blockSize[], int blocks, int processSize[], int processes)
{

    int allocate[processes];
    int occupied[blocks];
 
    //assigning -1 to all allocation indexes: nothing is allocated currently
    for(int i = 0; i < processes; i++)
			allocate[i] = -1;
	
	for(int i = 0; i < blocks; i++)
        occupied[i] = 0;

    for (int i = 0; i < processes; i++) 
    {
        for (int j = 0; j < blocks; j++) 
        {
            if (!occupied[j] && blockSize[j] >= processSize[i]) 
            {
                // allocate block j to p[i] process
                allocate[i] = j;
                occupied[j] = 1;
                break;
            }
        }
    }

    printf("\nProcess \t Process Size \t Block no.\n");
    for (int i = 0; i < processes; i++) {
        printf("%d \t\t\t %d  ", i+1, processSize[i]);
        if (allocate[i] != -1)
            printf("\t\t\t %d \n",allocate[i] + 1);
        else
            printf("\t\t\t Not Allocated\n");
    }
}

void main()
{
    int blockSize[] = {500, 100, 60};
    int processSize[] = {50, 80, 100};

    int m = sizeof(blockSize)/sizeof(blockSize[0]);
    int n = sizeof(processSize)/sizeof(processSize[0]);

    implimentFirstFit(blockSize, m, processSize, n);
}
