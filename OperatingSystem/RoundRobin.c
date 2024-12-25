#include <stdio.h>

struct Process {
    int pid;  // Process ID
    int arrival_time;  // Arrival time
    int burst_time;  // Burst time
    int priority;  // Priority
    int completion_time;  // Completion time
    int waiting_time;  // Waiting time
    int turnaround_time;  // Turnaround time
};

void findCompletionTime(struct Process proc[], int n) {
    int current_time = 0;
    for (int i = 0; i < n; i++) {
        if (current_time < proc[i].arrival_time) {
            current_time = proc[i].arrival_time;
        }
        current_time += proc[i].burst_time;
        proc[i].completion_time = current_time;
    }
}

void findTurnaroundTime(struct Process proc[], int n) {
    for (int i = 0; i < n; i++) {
        proc[i].turnaround_time = proc[i].completion_time - proc[i].arrival_time;
    }
}

void findWaitingTime(struct Process proc[], int n) {
    for (int i = 0; i < n; i++) {
        proc[i].waiting_time = proc[i].turnaround_time - proc[i].burst_time;
    }
}

void printProcessTable(struct Process proc[], int n) {
    printf("PID\tArrival Time\tBurst Time\tPriority\tCompletion Time\tTurnaround Time\tWaiting Time\n");
    for (int i = 0; i < n; i++) {
        printf("%d\t%d\t\t%d\t\t%d\t\t%d\t\t%d\t\t%d\n", 
               proc[i].pid, proc[i].arrival_time, proc[i].burst_time, proc[i].priority,
               proc[i].completion_time, proc[i].turnaround_time, proc[i].waiting_time);
    }
}

int main() {
    int n;
    printf("Enter the number of processes: ");
    scanf("%d", &n);

    struct Process proc[n];
    for (int i = 0; i < n; i++) {
        printf("Enter arrival time, burst time and priority for process %d: ", i + 1);
        proc[i].pid = i + 1;
        scanf("%d%d%d", &proc[i].arrival_time, &proc[i].burst_time, &proc[i].priority);
    }

    // Sort processes by arrival time, then by priority if arrival times are the same
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (proc[j].arrival_time > proc[j + 1].arrival_time ||
                (proc[j].arrival_time == proc[j + 1].arrival_time && proc[j].priority > proc[j + 1].priority)) {
                struct Process temp = proc[j];
                proc[j] = proc[j + 1];
                proc[j + 1] = temp;
            }
        }
    }

    findCompletionTime(proc, n);
    findTurnaroundTime(proc, n);
    findWaitingTime(proc, n);

    printProcessTable(proc, n);

    return 0;
} 
