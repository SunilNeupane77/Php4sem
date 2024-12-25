#include<stdio.h>
#include<stdlib.h>

int main() {
    int RQ[100], i, n, THM = 0, init, c = 0;
    printf("Enter the number of Requests\n");
    scanf("%d", &n);
    printf("Enter the Requests sequence\n");
    for (i = 0; i < n; i++)
        scanf("%d", &RQ[i]);
    printf("Enter initial head position\n");
    scanf("%d", &init);
    printf("Disk Process Sequence: ");
    while (c != n) {
        int m = 1000, d, index;
        for (i = 0; i < n; i++) {
            d = abs(RQ[i] - init);
            if (m > d) {
                m = d;
                index = i;
            }
        }
        THM += m;
        printf("%d -> ", init);
        init = RQ[index];
        RQ[index] = 1000;
        c++;
    }
    printf("%d\n", init);
    printf("Total head movement is %d", THM);
    return 0;
}
