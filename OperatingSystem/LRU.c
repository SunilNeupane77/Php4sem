#include <stdio.h>

#define MAX_FRAMES 10  // Maximum number of frames

void fifo_page_replacement(int pages[], int n, int frameSize)
{
    int frames[MAX_FRAMES];
    int index = 0;
    int page_faults = 0;

    // Initialize frames
    for (int i = 0; i < frameSize; i++) {
        frames[i] = -1;
    }

    for (int i = 0; i < n; i++) {
        int page = pages[i];
        int found = 0;

        // Check if page is already in frames
        for (int j = 0; j < frameSize; j++) {
            if (frames[j] == page) {
                found = 1;
                break;
            }
        }

        // Page fault occurs if page is not found
        if (!found) {
            page_faults++;
            frames[index] = page;
            index = (index + 1) % frameSize;  // Update the index in a circular manner
        }

        // Print current state of frames
        printf("Frames: ");
        for (int j = 0; j < frameSize; j++) {
            if (frames[j] == -1) {
                printf("- \t\t");
            } else {
                printf("%d \t\t", frames[j]);
            }
        }
        printf("\n");
    }

    printf("Total Page Faults: %d\n", page_faults);
}

int main()
{
    int n, frameSize;

    // Get the number of pages and frame capacity from the user
    printf("Enter the number of pages: ");
    scanf("%d", &n);

    int pages[n];

    printf("Enter the page references: ");
    for (int i = 0; i < n; i++) {
        scanf("%d", &pages[i]);
    }

    printf("Enter the number of frames: ");
    scanf("%d", &frameSize);

    fifo_page_replacement(pages, n, frameSize);

    return 0;
}