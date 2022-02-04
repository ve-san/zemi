import math
import sys
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import plotly.express as go

y = int(sys.argv[1])
m = int(sys.argv[2])
d = int(sys.argv[3])
ho = int(sys.argv[4])
mi = int(sys.argv[5])
se = int(sys.argv[6])
nanboku = int(sys.argv[7])
ido = int(sys.argv[8])
touzai = int(sys.argv[9])
keido = int(sys.argv[10])

############   諸計算    ##############################################
P = m - 1
Q = (m+7)//10
Y = ((y/4) - (y//4) + 0.77)//1
S = (P * 0.55 - 0.33)//1 

T = 30 * P + Q*(S-Y) + P*(1-Q) + d            #通日
F = ((ho-9)/24) + (mi/1440) + (se/86400)      #世界時を日の端数で表す

if F < 0:   #世界時が1以下の場合、1以上にする
	F += 1

if nanboku == 2:
		ido = -ido

##excelデータから地球時ー世界時の読み込み
df = pd.read_excel('data.xlsx', sheet_name=f'{y}',index_col=0, header=0)
ttt = (df.at['0ta','t'])

t = T + F + (ttt/86400) ### 計算用の時刻引数t
t1= T + F               ### Rを求める際の引数
F2= F * 24              ### グリニッジ時角を求めるために24倍しておく

############ 通日区分の選定(tu_ku) #########################################
if 0<= t <=121 :
	tu_ku = 'A'
	a = 0
	b = 121

elif 121< t <= 244:
	tu_ku = 'B'
	a = 120
	b = 244

elif 245 < t <=366:
	tu_ku = 'C'
	a = 243
	b = 366  

############ θを求める(sitta) #########################################

X = ((2*t - (a+b))/(b-a))
siita = math.degrees(math.acos(X)) ### ラジアンを求める＋度数に変換

X2= ((2*t1 - (a+b))/(b-a))        ### Rを求めるためにt1を使う
hG_siita = math.degrees(math.acos(X2))

########################################################################

### 出力時の記号
h = 'h'    
m = 'm'
s = 's'
d = 'a'    ### °
ten = "'"
tt= '"'

#######################################################################
#####################   　　　　　　   　　　　　　 　　　　#######################
#####################　　　　　　　main loop　　　  　　　#######################
#####################　                         　#######################
#######################################################################

### 空のリスト、ループ中に格納(作図に用いる) ###
## matplotlib用 ##
Xx1 = []
Yy1 = []
Zz1 = []
## plotly用 ##
Xx2 = []
Yy2 = []
Zz2 = []
Xx3 = []
Yy3 = []
Zz3 = []
koudo_ = []

planet_list = ['ta','ki','ka','mo','do'] #天体のリスト

for planet in planet_list:

	########################   　赤経　   #############################	
	num = 0
	RA = 0
	for i in range(18):  ###f(t)=C0 + C1 cosθ + C2 cos 2θ + ・・・ + CN cos Nθ

		df = pd.read_excel('data.xlsx', sheet_name=f'{y}',index_col=0, header=0)
		RA_d = (df.at[f'{num}{planet}',f'{tu_ku}_RA'])

		XXX = RA_d * math.cos(siita * i * math.pi / 180)

		RA = RA + XXX
		num += 1

	### 0以下24以上の対応　###
	if RA <= 0:
		RA = RA + 24
	elif RA >= 24:
		RA = RA - 24

	### h/m/s換算　###
	RAm = (RA - int(RA)) * 60
	RAs = (RAm - int(RAm)) * 60


	########################   　赤緯　   ###########################

	num = 0
	DEC = 0
	for i in range(18):

		df = pd.read_excel('data.xlsx', sheet_name=f'{y}',index_col=0, header=0)
		DEC_d = (df.at[f'{num}{planet}',f'{tu_ku}_DEC'])

		XXX = DEC_d * math.cos(siita * i * math.pi / 180)

		DEC = DEC + XXX
		num += 1

	### 太陽の赤緯換算　###
	DEC1 = (DEC - int(DEC)) * 60
	DEC2 = (DEC1 - int(DEC1)) * 60


	######################   　地心距離　   #########################
	num = 0
	DIST = 0
	for i in range(18):

		df = pd.read_excel('data.xlsx', sheet_name=f'{y}',index_col=0, header=0)
		DIST_d = (df.at[f'{num}{planet}',f'{tu_ku}_DIST'])

		XXX = DIST_d * math.cos(siita * i * math.pi / 180)

		DIST = DIST + XXX
		num += 1


	##################    　グリニッジ時角　   ##########################
	num = 0
	R = 0
	for i in range(8):

		df = pd.read_excel('data.xlsx', sheet_name=f'{y}',index_col=0, header=0)
		R_d = (df.at[f'{num}ta',f'{tu_ku}_R'])
		XXX = R_d * math.cos(hG_siita * i * math.pi / 180)

		R = R + XXX
		num += 1

	E = R - RA

	### 0以下24以上の対応 ###	
	if E <= 0:
		E = E + 24
	elif E >= 24:
		E = E - 24

	hG = E + F2   ### グリニッジ時角 = E + UT

	### 0以下24以上の対応 ###	
	if hG <= 0:
		hG += 24
	elif hG >= 24:
		hG -= 24

	### 変換(h/m/s) ###
	hGm = (hG - int(hG)) * 60
	hGs = (hGm - int(hGm)) * 60
	
	
	####################################
	########   地平座標に変換   ##########
	####################################
	
	if touzai == 1:
		zi_2 = 360 - keido
		if (hG*15) > zi_2:
			zikaku = (hG*15) - zi_2
		else:
			zikaku = (hG*15) + keido
	
	if touzai == 2:
		if keido > (hG*15):
			zikaku = 360-(keido - (hG*15))
		else:
			zikaku = (hG*15) - keido
	
	koudo = math.degrees(math.asin(math.cos(math.radians(ido)) * math.cos(math.radians(zikaku)) * math.cos(math.radians(DEC)) + math.sin(math.radians(ido)) * math.sin(math.radians(DEC))))
	koudo_.append(koudo)
	
	houi_x = math.sin(math.radians(DEC)) * math.cos(math.radians(ido)) - math.sin(math.radians(ido)) * math.cos(math.radians(DEC)) * math.cos(math.radians(zikaku))
	houi_y = -math.cos(math.radians(DEC)) * math.sin(math.radians(zikaku))
	houi_o = math.atan(houi_y/houi_x)	
	if houi_x < 0:
		houi_o += math.pi
	if houi_o < 0:
		houi_o += 2*math.pi
	houi = math.degrees(houi_o)	


	#################    　作図用のリストに格納　    #####################
	## matplotlib用 ##
	X1 = DIST * math.cos(DEC * math.pi / 180) * math.cos(RA * 15 * math.pi / 180)
	Y1 = DIST * math.cos(DEC * math.pi / 180) * math.sin(RA * 15 * math.pi / 180)
	Z1 = DIST * math.sin(DEC * math.pi / 180)
	Xx1.append(X1)
	Yy1.append(Y1)
	Zz1.append(Z1)

	## plotly用 ##
	X2 = 10.2 * math.cos(DEC * math.pi / 180) * math.cos(hG * 15 * math.pi / 180)
	Y2 = 10.2 * math.cos(DEC * math.pi / 180) * math.sin(hG * 15 * math.pi / 180)
	Z2 = 10.2 * math.sin(DEC * math.pi / 180)
	Xx2.append(X2)
	Yy2.append(Y2)
	Zz2.append(Z2)
	
	X3 = 9.5 * math.cos(koudo * math.pi / 180) * math.cos(houi * math.pi / 180)
	Y3 = 9.5 * math.cos(koudo * math.pi / 180) * math.sin(houi * math.pi / 180)
	Z3 = 9.5 * math.sin(koudo * math.pi / 180)
	Xx3.append(X3)
	Yy3.append(Y3)
	Zz3.append(Z3)

	############     結果出力     #################
	print('------------------')	
	print(planet)
	print('------------------')
	print(int(RA), h, int(RAm), m, round(RAs), s) ### 赤経
	print(int(DEC), d, int(abs(DEC1)), ten, round(abs(DEC2)), tt) ### 赤緯
	print('{:.3f}'.format(DIST)) ### 地心距離
	print('グリニッジ時角')
	print(int(hG), h,int(hGm), m, round(hGs), s) ### グリニッジ時角


########################################################################
#####################   　　　　　　      　　　　　　　　#########################
#####################　　　　　　　グラフ描画　　　　　　　　#########################
#####################　               　　　　　　　　#########################
########################################################################

################################################################
##################   　　　上からグラフ 　　　　 ########################
################################################################

###### 図レイアウト ######
fig = plt.figure(figsize=(4,4))
ax = fig.add_subplot()
ax.set_aspect('equal')       #正方形
ax.set_facecolor('darkblue') #背景色

## 目盛りと目盛り線の非表示 ##
ax.tick_params(labelbottom=False,
				labelleft=False,
				labelright=False,
				labeltop=False,)
ax.tick_params(bottom=False,
				left=False,
				right=False,
				top=False)
## 縦横設定 ##
plt.xlim(-11,11)
plt.ylim(-11,11)

### 各天体plot ###
plt.scatter( 0,0, color='red', s=40, label="Sun")
plt.scatter((0     -Xx1[0]),(0     -Yy1[0]), color='skyblue', s=25, label="Earth")
plt.scatter((Xx1[1]-Xx1[0]),(Yy1[1]-Yy1[0]), color='yellow', s=25, label="Venus")
plt.scatter((Xx1[2]-Xx1[0]),(Yy1[2]-Yy1[0]), color='darkorange', s=25, label="Mars")
plt.scatter((Xx1[3]-Xx1[0]),(Yy1[3]-Yy1[0]), color='lawngreen', s=25, label="Jupiter")
plt.scatter((Xx1[4]-Xx1[0]),(Yy1[4]-Yy1[0]), color='tan', s=25, label="Saturn")
plt.legend(prop={'size':8,})
### 各天体の軌道線 ###   
circle_a = plt.Circle((0, 0), (math.sqrt(((Xx1[0]-   0 )**2) + ((Yy1[0]-   0 )**2))) ,fill=False, color="gainsboro", linewidth = 0.3)
circle_b = plt.Circle((0, 0), (math.sqrt(((Xx1[1]-Xx1[0])**2) + ((Yy1[1]-Yy1[0])**2))) ,fill=False, color="gainsboro", linewidth = 0.3)
circle_c = plt.Circle((0, 0), (math.sqrt(((Xx1[2]-Xx1[0])**2) + ((Yy1[2]-Yy1[0])**2))) ,fill=False, color="gainsboro", linewidth = 0.3)
circle_d = plt.Circle((0, 0), (math.sqrt(((Xx1[3]-Xx1[0])**2) + ((Yy1[3]-Yy1[0])**2))) ,fill=False, color="gainsboro", linewidth = 0.3)
circle_e = plt.Circle((0, 0), (math.sqrt(((Xx1[4]-Xx1[0])**2) + ((Yy1[4]-Yy1[0])**2))) ,fill=False, color="gainsboro", linewidth = 0.3)
ax.set_aspect(1)
ax.add_artist(circle_a)
ax.add_artist(circle_b)
ax.add_artist(circle_c)
ax.add_artist(circle_d)
ax.add_artist(circle_e)


fig.subplots_adjust(left=0, right=1, bottom=0, top=1)
fig.savefig('fig_data/plot.png') #保存


################################################################
##################   　　　横からグラフ 　　　　 ########################
################################################################

###### 図レイアウト ######
fig2 = plt.figure(figsize=(4,4))
ax = fig2.add_subplot()
ax.set_aspect('equal')       #正方形
ax.set_facecolor('darkblue') #背景色

## 目盛りと目盛り線の非表示 ##
ax.tick_params(labelbottom=False,
				labelleft=False,
				labelright=False,
				labeltop=False)
ax.tick_params(bottom=False,
				left=False,
				right=False,
				top=False)
## 縦横設定 ##
plt.xlim(-11,11)
plt.ylim(-11,11)

### 各天体plot ###
plt.scatter(0, 0, color='red', s=40, label="Sun")
plt.scatter((0     -Yy1[0]),(0     -Zz1[0]), color='skyblue', s=25, label="Earth")
plt.scatter((Yy1[1]-Yy1[0]),(Zz1[1]-Zz1[0]), color='yellow', s=25, label="Venus")
plt.scatter((Yy1[2]-Yy1[0]),(Zz1[2]-Zz1[0]), color='darkorange', s=25, label="Mars")
plt.scatter((Yy1[3]-Yy1[0]),(Zz1[3]-Zz1[0]), color='lawngreen', s=25, label="Jupiter")
plt.scatter((Yy1[4]-Yy1[0]),(Zz1[4]-Zz1[0]), color='tan', s=25, label="Saturn")
plt.legend(prop={'size':8,})

### 各天体の軌道線 ###  
kyori_list = [1, 0.72, 1.52, 5.2, 10] #太陽ー各惑星の距離リスト
YYY = [] #ｙ座標データリスト
ZZZ = [] #ｚ座標データリスト
# 座標を得るための処理 #
for (i,j,kyori) in zip(Yy1, Zz1, kyori_list):
	if kyori == 1:
		D_Y = 0-Yy1[0]
		D_Z = 0-Zz1[0]
	else:
		D_Y = i-Yy1[0]
		D_Z = j-Zz1[0]	
	si_ta = 90 - math.degrees(math.atan(D_Y/D_Z))
	YY = kyori * math.cos(si_ta * math.pi / 180)
	ZZ = kyori * math.sin(si_ta * math.pi / 180)
	YYY.append(YY)
	ZZZ.append(ZZ)

plt.plot([YYY[0], -(YYY[0])], [ZZZ[0], -(ZZZ[0])],color="gainsboro", linewidth = 0.3)
plt.plot([YYY[1], -(YYY[1])], [ZZZ[1], -(ZZZ[1])],color="gainsboro", linewidth = 0.5)
plt.plot([YYY[2], -(YYY[2])], [ZZZ[2], -(ZZZ[2])],color="gainsboro", linewidth = 0.5)
plt.plot([YYY[3], -(YYY[3])], [ZZZ[3], -(ZZZ[3])],color="gainsboro", linewidth = 0.5)
plt.plot([YYY[4], -(YYY[4])], [ZZZ[4], -(ZZZ[4])],color="gainsboro", linewidth = 0.5)

fig2.subplots_adjust(left=0, right=1, bottom=0, top=1)
fig2.savefig('fig_data/plot2.png') #グラフの保存


################################################################
##################   　　　天球グラフ 　　　　 #########################
################################################################

from plotly.subplots import make_subplots

#### plotly用変数 ####
##  球  ##
u = np.linspace(0, 2 * np.pi, 100)
v = np.linspace(0, np.pi, 100)
x = 10 * np.outer(np.cos(u), np.sin(v))
y = 10 * np.outer(np.sin(u), np.sin(v))
z = 10 * np.outer(np.ones(np.size(u)), np.cos(v))
## 日本の経度 ##
x_b = -(np.cos(np.pi/4)*np.sin(v) * 10)
y_b = -(np.sin(np.pi/4)*np.sin(v) * 10)
z_b =   np.cos(v) * 10
## グリニッジ子午線 ##
x_c = np.sin(np.pi/2)*np.sin(v) * 10
y_c = np.cos(np.pi/2)*np.sin(v) * 10
z_c = np.cos(v) * 10

#### 作図 ####
fig3 = make_subplots()

fig3.add_surface(x=x, y=y, z=z, showscale=False,opacity=0.2) #球
fig3.add_scatter3d(x=[0],y=[0],z=[0],marker_color='#2593ff',marker_size=9,name='Earth') #地球
fig3.add_scatter3d(x=[Xx2[0]],y=[Yy2[0]],z=[Zz2[0]],marker_color='red',marker_size=7,name='Sun') #太陽  
fig3.add_scatter3d(x=[Xx2[1]],y=[Yy2[1]],z=[Zz2[1]],marker_color='yellow',marker_size=5,name='Venus') #金星
fig3.add_scatter3d(x=[Xx2[2]],y=[Yy2[2]],z=[Zz2[2]],marker_color='orange',marker_size=5,name='Mars') #火星
fig3.add_scatter3d(x=[Xx2[3]],y=[Yy2[3]],z=[Zz2[3]],marker_color='lawngreen',marker_size=5,name='Jupiter') #木星
fig3.add_scatter3d(x=[Xx2[4]],y=[Yy2[4]],z=[Zz2[4]],marker_color='tan',marker_size=5,name='Saturn') #土星
fig3.add_scatter3d(x=[0,0],y=[0,0],z=[-16,16],mode = 'lines',marker_color='gray',line_width=1, showlegend=False) #軸　
fig3.add_scatter3d(x=x_b, y=y_b, z=z_b,mode = 'lines',marker_color='blue',line_width=1,name='Japan Line') #日本の経度線
fig3.add_scatter3d(x=x_c, y=y_c, z=z_c,mode = 'lines',marker_color='red',line_width=1, name='G.Line') #グリニッジ子午線
fig3.add_scatter3d(x=[0,-5.79],y=[0,-5.79],z=[0,5.73],mode='lines',line_dash='dash',showlegend=False)
fig3.add_scatter3d(x=[-5.79],y=[-5.79],z=[5.73],marker_color='gray',marker_size=2,showlegend=False)

#### レイアウト ####
fig3['layout'].update(scene = dict(aspectratio = dict(x=1 ,y=1 ,z=1), #アスペクト比
											xaxis = dict(range=[-13, 13], title='', showgrid=False, showticklabels=False),
											yaxis = dict(range=[13, -13], title='',showgrid=False, showticklabels=False),
											zaxis = dict(range=[-13, 13], title='',showgrid=False, showticklabels=False)
									),
						hovermode=False,
						plot_bgcolor ="#4C78A8",
						paper_bgcolor="#4C78A8",
						dragmode="turntable",
						legend=dict(orientation='h',
									xanchor='left',
									yanchor='bottom',
									x = 0.02,
									y = 1					
									)
						)           

fig3.write_html("fig_data/tenkyu.html") #保存


###############################################################
#################   　　　地平グラフ 　　　　 #########################
###############################################################

v = np.linspace(0, np.pi*2, 100)
x_c = np.sin(np.pi/2)*np.sin(v) * 10
y_c = np.cos(v) * 10
z_c = np.cos(np.pi/2)*np.sin(v) * 10

v = np.linspace(0, np.pi, 100)
x_cc = np.cos(v) * 10
y_cc = np.cos(np.pi/2)*np.sin(v) * 10
z_cc = np.sin(np.pi/2)*np.sin(v) * 10

v = np.linspace(0, np.pi/2, 100)
x_ccc = np.cos(np.pi/2)*np.sin(v) * 10
y_ccc = np.sin(np.pi/2)*np.sin(v) * 10
y_cccc = -(np.sin(np.pi/2)*np.sin(v) * 10)
z_ccc = np.cos(v) * 10


fig4 = make_subplots()

fig4.add_scatter3d(x=x_c, y=y_c, z=z_c,mode = 'lines',marker_color='black',line_width=2, showlegend=False)
fig4.add_scatter3d(x=x_cc, y=y_cc, z=z_cc,mode = 'lines',marker_color='gray',line_width=1, showlegend=False)
fig4.add_scatter3d(x=x_ccc, y=y_ccc, z=z_ccc,mode = 'lines',marker_color='gray',line_width=1, showlegend=False)
fig4.add_scatter3d(x=x_ccc, y=y_cccc, z=z_ccc,mode = 'lines',marker_color='gray',line_width=1, showlegend=False)

if koudo_[0] < 0:
	fig4.add_surface(x=x, y=y, z=z, showscale=False,opacity=0.3, colorscale="deep") #球
else:
	fig4.add_surface(x=x, y=y, z=z, showscale=False,opacity=0.3)
fig4.add_scatter3d(x=[0],y=[0],z=[0],marker_color='#000',marker_size=3, showlegend=False)
fig4.add_scatter3d(x=[Xx3[0]],y=[Yy3[0]],z=[Zz3[0]],marker_color='red',marker_size=7,name='Sun') #太陽  
fig4.add_scatter3d(x=[Xx3[1]],y=[Yy3[1]],z=[Zz3[1]],marker_color='yellow',marker_size=5,name='Venus') #金星
fig4.add_scatter3d(x=[Xx3[2]],y=[Yy3[2]],z=[Zz3[2]],marker_color='orange',marker_size=5,name='Mars') #火星
fig4.add_scatter3d(x=[Xx3[3]],y=[Yy3[3]],z=[Zz3[3]],marker_color='lawngreen',marker_size=5,name='Jupiter') #木星
fig4.add_scatter3d(x=[Xx3[4]],y=[Yy3[4]],z=[Zz3[4]],marker_color='tan',marker_size=5,name='Saturn') #土星


fig4.add_scatter3d(x=[10],y=[0],z=[0],marker_color='gainsboro', text='北',mode='text', showlegend=False)
fig4.add_scatter3d(x=[0],y=[10],z=[0],marker_color='gainsboro', text='東',mode='text', showlegend=False)
fig4.add_scatter3d(x=[0],y=[-10],z=[0],marker_color='gainsboro', text='西',mode='text', showlegend=False)
fig4.add_scatter3d(x=[-10],y=[0],z=[0],marker_color='gainsboro', text='南',mode='text', showlegend=False)



fig4['layout'].update(scene = dict(aspectratio = dict(x=1 ,y=1 ,z=1), #アスペクト比
											xaxis = dict(range=[-13, 13], title='', showgrid=False, showticklabels=False),
											yaxis = dict(range=[13, -13], title='',showgrid=False, showticklabels=False),
											zaxis = dict(range=[-11, 13], title='',showgrid=False, showticklabels=False)
									),
						hovermode=False,
						plot_bgcolor ="#4C78A8",
						paper_bgcolor="#4C78A8",
						dragmode="turntable",
						legend=dict(orientation='h',
									xanchor='left',
									yanchor='bottom',
									x = 0.02,
									y = 1					
									)
						)         
fig4.write_html("fig_data/tihei.html")

# fig3.show()
# fig4.show()
# plt.show()






