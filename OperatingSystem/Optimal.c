// C Programming Lab Report Question One 
@ Author:Sunil Neupane

#include <stdio.h>

int main() {
    int n, pg[30], fr[10];
    int count[10], i, j, k, fault, f, flag, temp, current, c, dist, max, m, cnt, p, x;
    fault = 0;
    dist = 0;
    k = 0;

    printf("Enter the total number of pages: ");
    scanf("%d", &n);

    printf("Enter the page reference sequence: ");
    for (i = 0; i < n; i++)
        scanf("%d", &pg[i]);

    printf("Enter frame size: ");
    scanf("%d", &f);

    for (i = 0; i < f; i++) {
        count[i] = 0;
        fr[i] = -1;
    }

    printf("\nPage\tFrames\n");

    for (i = 0; i < n; i++) {
        flag = 0;
        temp = pg[i];

        for (j = 0; j < f; j++) {
            if (temp == fr[j]) {
                flag = 1;
                break;
            }
        }

        if ((flag == 0) && (k < f)) {
            fault++;
            fr[k] = temp;
            k++;
        } else if ((flag == 0) && (k == f)) {
            fault++;

            for (cnt = 0; cnt < f; cnt++) {
                current = fr[cnt];

                for (c = i; c < n; c++) {
                    if (current != pg[c])
                        count[cnt]++;
                    else
                        break;
                }
            }

            max = 0;

            for (m = 0; m < f; m++) {
                if (count[m] > max) {
                    max = count[m];
                    p = m;
                }
            }

            fr[p] = temp;
        }

        printf("%d\t\t", pg[i]);
        
        for (x = 0; x < f; x++) {
            printf("%d\t\t", fr[x]);
        }
        
        printf("\n");
    }

    printf("\nTotal number of page faults: %d\n", fault);
    return 0;
}