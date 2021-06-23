# بسم الله الرحمن الرحيم
نبدأ بالصفحة الأولى صفحة واجهة المستخدم (Index) والتي تحتوي على نموذج بداخله عدد ست منزلقات (sliders) بواقع منزلق لكل محرك ومن خلالها يقوم المستخدم بضبط زاوية المحرك على أي زاوية يرغب بضبط المحرك عليها.
بعدما يقوم المستخدم باختيار الزوايا المراد ضبط المحركات عليها يقوم بضغط زر الحفظ (Save) من خلال الضغط على زر الحفظ تقوم الصفحة بتخزين هذه القيم في جدول خاص بزوايا المحركات في قاعدة البيانات.
قمت بتصميم صفحة خاصة بقيم الزوايا (Deg_value) تحتوي على جدول يعرض هذه القيم وهذه الصفحة تعرض اخر قيم تم إدخالها وحفظها في قاعدة البيانات وقد قمت بتحويل المستخدم على هذه الصفحة بشكل تلقائي بعد الضغط على زر الحفظ لتظهر امامه قيم جميع المحركات بشكل واضح.
بالضغط على زر التشغيل يقوم هذا الزر بجلب قيمة التشغيل (On) من الجدول الخاص بها من قاعدة البيانات ويعرض وضع التشغيل بشكل واضح للمستخدم.

Firstable we will start with User interface (index) page that contains a form with six sliders one for each motor. with these sliders, we can set the degree of the motor to eny degree that user need.
After the user chooses the degree on which the motors want to be set, he presses the “Save” button by pressing the “save” button. The page stores these values in a special table of the angles of the motors in the database.
I designed a php page for degrees values (Deg_value) that contains a table that displays these values, and this page displays the last values entered and saved in the database. I have automatically transferred the user to this page after pressing the save button, so that the values of all engines appear clearly in front of him.
