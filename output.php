Enter domain_number of Domain:4
number of nodes in domain  0  =  3
average of domain  0  =  15.0     
number of nodes in domain  1  =  3
average of domain  1  =  10.0     
number of nodes in domain  2  =  3
average of domain  2  =  12.0     
number of nodes in domain  3  =  3
average of domain  3  =  9.333333333333334
total nodes in multi-domain substrate network [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
total edges in multi-domain substrate network [(0, 1), (0, 2), (1, 2), (3, 4), (3, 5), (4, 5), (6, 8), (7, 8), (9, 10), (9, 11), (10, 11)]
Printing Graph
0 {'weight': 5, 'domain': 0, 'velocity': 0}
1 {'weight': 4, 'domain': 0, 'velocity': 1}
2 {'weight': 5, 'domain': 0, 'velocity': 1}
3 {'weight': 4, 'domain': 1, 'velocity': 1}
4 {'weight': 6, 'domain': 1, 'velocity': 0}
5 {'weight': 5, 'domain': 1, 'velocity': 1}
6 {'weight': 5, 'domain': 2, 'velocity': 0}
7 {'weight': 5, 'domain': 2, 'velocity': 0}
8 {'weight': 6, 'domain': 2, 'velocity': 0}
9 {'weight': 6, 'domain': 3, 'velocity': 1}
10 {'weight': 4, 'domain': 3, 'velocity': 1}
11 {'weight': 4, 'domain': 3, 'velocity': 0}
Printing Domain Connectors
0 [(1, 3), (2, 9)]
1 [(3, 1), (5, 6)]
2 [(6, 5), (7, 10)]
3 [(10, 7), (9, 2)]
shortestPath
[(0, {0: 0, 1: 10, 3: 14, 2: 16, 5: 21, 4: 27, 9: 31, 10: 36, 6: 40, 11: 40, 7: 41, 8: 49}), (1, {1: 0, 3: 4, 0: 10, 5: 11, 4: 17, 2: 19, 6: 30, 9: 34, 8: 39, 10: 39, 11: 43, 7: 44}), (2, {2: 0, 9: 15, 0: 16, 1: 19, 10: 20, 3: 23, 11: 24, 7: 25, 5: 30, 8: 34, 4: 36, 6: 43}), (3, {3: 0, 1: 4, 5: 7, 4: 13, 0: 14, 2: 23, 6: 26, 8: 
35, 9: 38, 10: 43, 7: 44, 11: 47}), (4, {4: 0, 5: 10, 3: 13, 1: 17, 0: 27, 6: 29, 2: 36, 8: 38, 7: 47, 9: 51, 10: 52, 11: 60}), (5, {5: 0, 3: 7, 4: 10, 1: 11, 6: 19, 0: 21, 8: 28, 2: 30, 7: 37, 10: 42, 9: 45, 11: 54}), (6, {6: 0, 8: 9, 7: 18, 5: 19, 10: 23, 3: 26, 9: 28, 4: 29, 1: 30, 11: 37, 0: 40, 2: 43}), (7, {7: 0, 10: 5, 8: 9, 9: 10, 6: 18, 11: 19, 2: 25, 5: 37, 0: 41, 1: 44, 3: 44, 4: 47}), (8, {8: 0, 6: 9, 7: 9, 10: 14, 9: 19, 5: 28, 11: 28, 2: 34, 3: 35, 4: 38, 1: 39, 0: 49}), (9, {9: 0, 10: 5, 11: 9, 7: 10, 2: 15, 8: 19, 6: 28, 0: 31, 1: 34, 3: 38, 5: 45, 4: 51}), (10, {10: 0, 9: 5, 7: 5, 11: 14, 8: 14, 2: 20, 6: 23, 0: 36, 1: 39, 5: 42, 3: 43, 4: 52}), (11, {11: 0, 9: 9, 10: 14, 7: 19, 2: 24, 8: 28, 6: 37, 0: 40, 1: 43, 3: 47, 5: 54, 4: 60})]
Number of nodes in VNR =  [0, 1, 2]
Edges among nodes in VNG =  [(0, 1), (0, 2), (1, 2)]
Printing Virtual Graph
0 {'weight': 4, 'domain': [3, 0], 'velocity': 0, 'conn_with': []}
1 {'weight': 6, 'domain': [1, 2], 'velocity': 0, 'conn_with': []}
2 {'weight': 6, 'domain': [0, 2], 'velocity': 0, 'conn_with': []}
shortestPath_VG
[(0, {0: 0, 1: 16, 2: 16}), (1, {1: 0, 0: 16, 2: 17}), (2, {2: 0, 0: 16, 1: 17})]
VNR node : 0 {'weight': 4, 'domain': [3, 0], 'velocity': 0, 'conn_with': []}
Adjacents : {1: {'weight': 16}, 2: {'weight': 16}}
[[1, 2], [0, 2]]
[(1, 0), (1, 2), (2, 0), (2, 2)]
subs value of virtual node  0  is on nodes of domain 3
0 9 259.0362
0 10 262.9858
0 11 353.9497
subs value of virtual node  0  is on nodes of domain 0
0 0 364.4387
0 1 269.5311
0 2 285.7668
VNR node : 1 {'weight': 6, 'domain': [1, 2], 'velocity': 0, 'conn_with': []}
Adjacents : {0: {'weight': 16}, 2: {'weight': 17}}
[[3, 0], [0, 2]]
[(3, 0), (3, 2), (0, 0), (0, 2)]
subs value of virtual node  1  is on nodes of domain 1
1 3 222.1313
1 4 320.5980
1 5 236.9686
subs value of virtual node  1  is on nodes of domain 2
1 6 268.6127
1 7 209.8944
1 8 282.3981
VNR node : 2 {'weight': 6, 'domain': [0, 2], 'velocity': 0, 'conn_with': []}
Adjacents : {0: {'weight': 16}, 1: {'weight': 17}}
[[3, 0], [1, 2]]
[(3, 1), (3, 2), (0, 1), (0, 2)]
subs value of virtual node  2  is on nodes of domain 0
2 0 297.6266
2 1 242.0092
2 2 234.0882
subs value of virtual node  2  is on nodes of domain 2
2 6 230.5941
2 7 253.7722
2 8 260.8555
d is a dictionary whose index shows (virtual_node,domain) and values shows (subs_value,substrate node)
(0, 3) [('259.0362', 9), ('262.9858', 10), ('353.9497', 11)]
(0, 0) [('269.5311', 1), ('285.7668', 2), ('364.4387', 0)]
(1, 1) [('222.1313', 3), ('236.9686', 5), ('320.5980', 4)]
(1, 2) [('209.8944', 7), ('268.6127', 6), ('282.3981', 8)]
(2, 0) [('234.0882', 2), ('242.0092', 1), ('297.6266', 0)]
(2, 2) [('230.5941', 6), ('253.7722', 7), ('260.8555', 8)]
::::::::VirtualGraph:::::::::
0 {'weight': 4, 'domain': [3, 0], 'velocity': 0, 'conn_with': [[('259.0362', 9), ('262.9858', 10), ('269.5311', 1), ('285.7668', 2)]]}
1 {'weight': 6, 'domain': [1, 2], 'velocity': 0, 'conn_with': [[('222.1313', 3), ('236.9686', 5), ('209.8944', 7), ('268.6127', 6)]]}
2 {'weight': 6, 'domain': [0, 2], 'velocity': 0, 'conn_with': [[('234.0882', 2), ('242.0092', 1), ('230.5941', 6), ('253.7722', 7)]]}
[9, 10, 1, 2]
[3, 5, 7, 6]
[2, 1, 6, 7]
defaultdict(<class 'list'>, {0: [9, 10, 1, 2], 1: [3, 5, 7, 6], 2: [2, 1, 6, 7]})


PSO Implementation


Location Vector  [1, 3, 2]
Velocity Vector  [1, 1, 1]
embedding cost (location Vector)  [80, 415, 88]
best location of all partical  [1, 3, 2]
embedding cost (ParticalBest Vector) [80, 415, 88]
best location of all partical [1, 1, 1]
iterator 0
updated Vi [0, 1, 1]
updated X [1, 7, 6]
updated p_best [1, 7, 2]
updated embedding cost (location vector)  [720, 336, 734]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [7, 7, 7]
iterator 1
updated Vi [1, 0, 1]
updated X [9, 7, 2]
updated p_best [1, 7, 6]
updated embedding cost (location vector)  [184, 455, 190]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 2
updated Vi [0, 1, 1]
updated X [9, 5, 7]
updated p_best [9, 7, 2]
updated embedding cost (location vector)  [744, 659, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 3
updated Vi [1, 0, 1]
updated X [1, 5, 2]
updated p_best [9, 5, 7]
updated embedding cost (location vector)  [192, 540, 206]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 4
updated Vi [0, 1, 1]
updated X [1, 6, 7]
updated p_best [1, 6, 2]
updated embedding cost (location vector)  [496, 336, 510]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [6, 6, 6]
iterator 5
updated Vi [1, 0, 1]
updated X [9, 6, 1]
updated p_best [1, 6, 7]
updated embedding cost (location vector)  [472, 540, 478]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 6
updated Vi [0, 1, 1]
updated X [9, 7, 6]
updated p_best [9, 7, 1]
updated embedding cost (location vector)  [184, 336, 190]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 7
updated Vi [0, 1, 1]
updated X [9, 5, 7]
updated p_best [9, 7, 6]
updated embedding cost (location vector)  [744, 659, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 8
updated Vi [1, 0, 1]
updated X [1, 5, 6]
updated p_best [9, 5, 7]
updated embedding cost (location vector)  [192, 353, 206]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 9
updated Vi [0, 1, 1]
updated X [1, 3, 7]
updated p_best [1, 5, 6]
updated embedding cost (location vector)  [80, 772, 88]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 10
updated Vi [0, 1, 1]
updated X [1, 6, 2]
updated p_best [1, 3, 7]
updated embedding cost (location vector)  [496, 761, 510]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 11
updated Vi [0, 1, 1]
updated X [1, 7, 6]
updated p_best [1, 7, 2]
updated embedding cost (location vector)  [720, 336, 734]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [7, 7, 7]
iterator 12
updated Vi [1, 0, 1]
updated X [9, 7, 2]
updated p_best [1, 7, 6]
updated embedding cost (location vector)  [184, 455, 190]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 13
updated Vi [0, 1, 1]
updated X [9, 6, 1]
updated p_best [9, 7, 2]
updated embedding cost (location vector)  [472, 540, 478]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 14
updated Vi [0, 1, 1]
updated X [9, 7, 6]
updated p_best [9, 7, 1]
updated embedding cost (location vector)  [184, 336, 190]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 15
updated Vi [0, 1, 1]
updated X [9, 5, 2]
updated p_best [9, 7, 6]
updated embedding cost (location vector)  [744, 540, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 16
updated Vi [1, 0, 1]
updated X [10, 5, 6]
updated p_best [9, 5, 2]
updated embedding cost (location vector)  [688, 353, 702]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 17
updated Vi [1, 0, 1]
updated X [2, 5, 7]
updated p_best [10, 5, 6]
updated embedding cost (location vector)  [500, 659, 510]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [2, 2, 2]
iterator 18
updated Vi [0, 1, 1]
updated X [2, 6, 1]
updated p_best [2, 5, 7]
updated embedding cost (location vector)  [708, 540, 718]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [6, 6, 6]
iterator 19
updated Vi [1, 0, 1]
updated X [10, 6, 2]
updated p_best [2, 6, 1]
updated embedding cost (location vector)  [384, 761, 398]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [10, 10, 10]
iterator 20
updated Vi [0, 1, 1]
updated X [10, 5, 7]
updated p_best [10, 6, 2]
updated embedding cost (location vector)  [688, 659, 702]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 21
updated Vi [1, 0, 1]
updated X [9, 5, 6]
updated p_best [10, 5, 7]
updated embedding cost (location vector)  [744, 353, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 22
updated Vi [1, 0, 1]
updated X [10, 5, 1]
updated p_best [9, 5, 6]
updated embedding cost (location vector)  [688, 217, 702]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 23
updated Vi [1, 0, 1]
updated X [2, 5, 7]
updated p_best [10, 5, 1]
updated embedding cost (location vector)  [500, 659, 510]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [2, 2, 2]
iterator 24
updated Vi [0, 1, 1]
updated X [2, 3, 1]
updated p_best [2, 3, 7]
updated embedding cost (location vector)  [388, 92, 392]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 25
updated Vi [1, 0, 1]
updated X [10, 3, 7]
updated p_best [2, 3, 1]
updated embedding cost (location vector)  [704, 772, 712]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [10, 10, 10]
iterator 26
updated Vi [0, 1, 1]
updated X [10, 6, 1]
updated p_best [10, 3, 7]
updated embedding cost (location vector)  [384, 540, 398]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [10, 10, 10]
iterator 27
updated Vi [0, 1, 1]
updated X [10, 7, 2]
updated p_best [10, 6, 1]
updated embedding cost (location vector)  [96, 455, 110]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [10, 10, 10]
iterator 28
updated Vi [0, 1, 1]
updated X [10, 6, 7]
updated p_best [10, 6, 2]
updated embedding cost (location vector)  [384, 336, 398]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [6, 6, 6]
iterator 29
updated Vi [1, 0, 1]
updated X [2, 6, 1]
updated p_best [10, 6, 7]
updated embedding cost (location vector)  [708, 540, 718]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [6, 6, 6]
iterator 30
updated Vi [1, 0, 1]
updated X [10, 6, 2]
updated p_best [2, 6, 1]
updated embedding cost (location vector)  [384, 761, 398]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [10, 10, 10]
iterator 31
updated Vi [0, 1, 1]
updated X [10, 3, 6]
updated p_best [10, 6, 2]
updated embedding cost (location vector)  [704, 466, 712]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 32
updated Vi [1, 0, 1]
updated X [2, 3, 1]
updated p_best [10, 3, 6]
updated embedding cost (location vector)  [388, 92, 392]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 33
updated Vi [1, 0, 1]
updated X [10, 3, 2]
updated p_best [2, 3, 1]
updated embedding cost (location vector)  [704, 415, 712]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 34
updated Vi [1, 0, 1]
updated X [1, 3, 7]
updated p_best [10, 3, 2]
updated embedding cost (location vector)  [80, 772, 88]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 35
updated Vi [0, 1, 1]
updated X [1, 5, 2]
updated p_best [1, 3, 7]
updated embedding cost (location vector)  [192, 540, 206]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 36
updated Vi [0, 1, 1]
updated X [1, 6, 7]
updated p_best [1, 6, 2]
updated embedding cost (location vector)  [496, 336, 510]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [6, 6, 6]
iterator 37
updated Vi [1, 0, 1]
updated X [9, 6, 1]
updated p_best [1, 6, 7]
updated embedding cost (location vector)  [472, 540, 478]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 38
updated Vi [0, 1, 1]
updated X [9, 3, 7]
updated p_best [9, 6, 1]
updated embedding cost (location vector)  [632, 772, 632]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 39
updated Vi [0, 1, 1]
updated X [9, 5, 1]
updated p_best [9, 5, 7]
updated embedding cost (location vector)  [744, 217, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 40
updated Vi [1, 0, 1]
updated X [10, 5, 2]
updated p_best [9, 5, 1]
updated embedding cost (location vector)  [688, 540, 702]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 41
updated Vi [1, 0, 1]
updated X [9, 5, 1]
updated p_best [10, 5, 2]
updated embedding cost (location vector)  [744, 217, 750]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 42
updated Vi [1, 0, 1]
updated X [10, 5, 2]
updated p_best [9, 5, 1]
updated embedding cost (location vector)  [688, 540, 702]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [5, 5, 5]
iterator 43
updated Vi [1, 0, 1]
updated X [1, 5, 6]
updated p_best [10, 5, 2]
updated embedding cost (location vector)  [192, 353, 206]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 44
updated Vi [0, 1, 1]
updated X [1, 7, 2]
updated p_best [1, 5, 6]
updated embedding cost (location vector)  [720, 455, 734]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [7, 7, 7]
iterator 45
updated Vi [1, 0, 1]
updated X [9, 7, 1]
updated p_best [1, 7, 2]
updated embedding cost (location vector)  [184, 778, 190]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [9, 9, 9]
iterator 46
updated Vi [0, 1, 1]
updated X [9, 3, 6]
updated p_best [9, 7, 1]
updated embedding cost (location vector)  [632, 466, 632]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 47
updated Vi [1, 0, 1]
updated X [10, 3, 2]
updated p_best [9, 3, 6]
updated embedding cost (location vector)  [704, 415, 712]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [3, 3, 3]
iterator 48
updated Vi [1, 0, 1]
updated X [1, 3, 7]
updated p_best [10, 3, 2]
updated embedding cost (location vector)  [80, 772, 88]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
iterator 49
updated Vi [0, 1, 1]
updated X [1, 5, 6]
updated p_best [1, 5, 7]
updated embedding cost (location vector)  [192, 353, 206]
updated embedding cost (ParticalBest Vector) [80, 415, 88]
updated g_best [1, 1, 1]
After the algorithm run for enogh iteration
Virtual Node  0  is embedded with substrate node 1
Virtual Node  1  is embedded with substrate node 5
Virtual Node  2  is embedded with substrate node 6