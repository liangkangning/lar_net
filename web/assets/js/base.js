/*===========================
 *���ߣ���������(л��)
 *��ַ��http://www.it134.cn
 *ת���뱣��������Ϣ��лл
===========================*/

//=====================ȫ�ֺ���========================
//Tab���ƺ���
function tabs(tabId, tabNum){
	//���õ������л���ʽ
	$(tabId + " .tab li").removeClass("curr");
	$(tabId + " .tab li").eq(tabNum).addClass("curr");
	//���ݲ���������ʾ����
	$(tabId + " .tabcon").hide();
	$(tabId + " .tabcon").eq(tabNum).show();
}
//=====================ȫ�ֺ���========================

//==================ͼƬ��ϸҳ����=====================
//��꾭��Ԥ��ͼƬ����
function preview(img){
	$("#preview .jqzoom img").attr("src",$(img).attr("src"));
	$("#preview .jqzoom img").attr("jqimg",$(img).attr("bimg"));
}

//ͼƬ�Ŵ�Ч��
$(function(){
	$(".jqzoom").jqueryzoom({xzoom:380,yzoom:410});
});

//ͼƬԤ��Сͼ�ƶ�Ч��,ҳ�����ʱ����
$(function(){
	var tempLength = 0; //��ʱ����,��ǰ�ƶ��ĳ���
	var viewNum = 5; //����ÿ����ʾͼƬ�ĸ�����
	var moveNum = 2; //ÿ���ƶ�������
	var moveTime = 300; //�ƶ��ٶ�,����
	var scrollDiv = $(".spec-scroll .items ul"); //�����ƶ�����������
	var scrollItems = $(".spec-scroll .items ul li"); //�ƶ�������ļ���
	var moveLength = scrollItems.eq(0).width() * moveNum; //����ÿ���ƶ��ĳ���
	var countLength = (scrollItems.length - viewNum) * scrollItems.eq(0).width(); //�����ܳ���,�ܸ���*��������
	  
	//��һ��
	$(".spec-scroll .next").bind("click",function(){
		if(tempLength < countLength){
			if((countLength - tempLength) > moveLength){
				scrollDiv.animate({left:"-=" + moveLength + "px"}, moveTime);
				tempLength += moveLength;
			}else{
				scrollDiv.animate({left:"-=" + (countLength - tempLength) + "px"}, moveTime);
				tempLength += (countLength - tempLength);
			}
		}
	});
	//��һ��
	$(".spec-scroll .prev").bind("click",function(){
		if(tempLength > 0){
			if(tempLength > moveLength){
				scrollDiv.animate({left: "+=" + moveLength + "px"}, moveTime);
				tempLength -= moveLength;
			}else{
				scrollDiv.animate({left: "+=" + tempLength + "px"}, moveTime);
				tempLength = 0;
			}
		}
	});
});
//==================ͼƬ��ϸҳ����=====================