<x-app>
    <div class="max-w-6xl mx-auto px-6 py-12">

        <!-- TITLE -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">
                Course of Study
            </h1>
            <p class="text-gray-600 mt-3">
                Explore the courses offered in PhilMicTEEN
            </p>
        </div>
        <div class="w-full text-center shadow-sm mb-10 mt-10 bg-white p-10 text-3xl">
            <h1>Bible Courses</h1>
        </div>
        <!-- GRID -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- COURSE CARD -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <!-- Header -->
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-blue-600">
                        Introduction to the Bible
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: B10 
                    </p>
                </div>

                <!-- Hidden Content -->
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        INTRODUCTION TO THE BIBLE - This course explores the story of God in the Bible as the greatest book ever written. Students learn the major points of this story. The course highlights the key themes of the Bible, such as creation, covenant, Messiah, and the mission of the church. The students learn their place in the story and how to invite others to join in it. 
                    </p>
                </div>

            </div>

            <!-- COURSE CARD -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-green-600">
                       Hermeneunitcs
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: BS15
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        HERMENEUTICS - This course teaches the basic principles, methods, and rules of biblical interpretation. Students learn to make careful observations, interpret the historical and literary contexts, and come to understand the key themes of a passage. Students explore similarities and differences between the biblical context and the contemporary situations of their local congregation or culture. 
                    </p>
                </div>

            </div>

            <!-- COURSE CARD -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-purple-600">
                        The Prophets
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: TH101
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        THE PROPHETS -  This course introduces the historical and sociological background, theology, and application of the Major and Minor Prophets of the Old Testament, from Isaiah to Malachi. The key theme of returning to covenant is explored. Students learn methods of interpreting these books for preaching and teaching. The relevance of the messages of the prophets is studied as students determine practical application for their ministry contexts. 
                    </p>
                </div>

            </div>

            <!-- COURSE CARD -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-red-600">
                        The Four Gospel
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: NT21
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       THE FOUR GOSPELS -  This course studies the Gospels of Matthew, Mark, Luke, and John. Special emphasis is placed on the life and teachings of Jesus and his call to become one of his disciples. Attention is given to the historical background, outline, and key themes of each Gospel. Detailed exposition is done on selected passages, giving students models of interpretive methods they can use in their own ministries.  
                    </p>
                </div>

            </div>

            <!-- COURSE CARD -->
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-yellow-600">
                        Acts and Pauline Epistle
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: NT23
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        ACTS AND PAULINE EPISTLES -  This course traces the growth of the early church in Acts and gives special attention to the ministry of Paul the Apostle. Each of Paul's letters is explored as further evidence of the challenges and victories of the early church. Paul's theology in each letter is highlighted. Methods for bridging the message of these letters to the current context of the students are modeled with opportunities for students to demonstrate their growing interpretive skills. 
                    </p>
                </div>

            </div>

            <!-- COURSE CARD -->
            {{-- <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-indigo-600">
                        Church Leadership
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: CL101
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        Develops leadership skills for managing and growing
                        church ministries effectively.
                    </p>
                </div>

            </div> --}}

        </div>

       {{-- TITLE HEADER DIVISION --}}
       <div class="w-full text-center shadow-sm mb-10 mt-10 bg-white p-10 text-3xl">
            <h1>Theology Courses</h1>
       </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-yellow-600">
                        Foundational Theology 1
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: T21
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        FOUNDATIONAL THEOLOGY 1 -   This course introduces students to the language of theological thinking, a Wesleyan approach to understanding the Triune God, and the sources used to engage in this task. Students study the nature and attributes of God based on God’s self-revelation in the Bible. Students also are introduced to the practice of theological reflection, particularly as it relates to ministry contexts. 
                    </p>
                </div>

            </div>

            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-indigo-600">
                        Foundational Theology 2
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: T22
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        FOUNDATIONAL THEOLOGY 2 - This course continues to study the nature of God from a Wesleyan approach with a focus on God’s loving relation to creation and the redemption of all things through Jesus Christ. The nature of the human predicament is explored. The scriptural doctrine of salvation, including election, justification, sanctification, and glorification are examined. Students are encouraged to see God’s love in the world today.
                    </p>
                </div>

            </div>


              <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">

                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-green-600">
                        Foundational Theology 3
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: T23
                    </p>
                </div>

                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        FOUNDATIONAL THEOLOGY 3 -  This course expands students' language in theological thinking and understanding of a Wesleyan approach to the person and work of the Holy Spirit, with particular emphasis on the doctrine of holiness. Students examine key passages from the Bible about the Holy Spirit and the church. The means of grace and the fulfillment of time (eschatology) are studied. Students are challenged to see the new ways God is leading them to become more like Christ. 
                    </p>
                </div>

            </div>


            {{-- NEXT ROW --}}

             <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-purple-600">
                       Doctrine of Holiness
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: T40
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                         DOCTRINE OF HOLINESS -  This course is a study of the doctrine and lifestyle of holiness as taught in the Bible, historically in the Christian Church, and finally as developed in the theology of John Wesley and the Holiness Movement, with a special focus on the Wesleyan distinctive of entire sanctification or Christian perfection. They examine how God’s eternal plan is fulfilled in Jesus Christ and what this potentially means for every human. The student will be equipped to lead others (or themselves if needed) into the experience of entire sanctification.     
                    </p>
                </div>
            </div>


             <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-red-600">
                       Church History 1
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: H10
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                         CHURCH HISTORY 1 - This course introduces students to the history of Christianity, from the beginning on the day of Pentecost to the twenty-first century. Key persons, events, and issues in the growth and development of the church are analyzed using primary sources. The unique history of Christianity in the student’s own context is highlighted.    
                    </p>
                </div>
            </div>

             <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-yellow-600">
                       Church History 2
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: H20
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                         CHURCH HISTORY 2 -  This course explores and analyzes the dynamics of select challenges and controversies facing the Christian church through history, including the development of creedal statements. Students will articulate some of the ways in which these events continue to inform the development of Christianity today. They explore lessons learned from history to deal with current issues of their context.     
                    </p>
                </div>
            </div>


            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-indigo-600">
                       Nazarene Identity
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: H25
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                          NAZARENE IDENTITY - This course helps students explore and examine the emergence and expansion of the Church of the Nazarene as an international Christian denomination, leading to the presence of the denomination in a local context. This includes an analysis of the unique form and structure of the denomination. A brief history of the Church of the Nazarene is included as well as the history of the denomination in the student’s own country. The course covers the Local, District, and General structures, nature, and purpose as well as how they are funded. This course may be substituted with the study of a different denomination.     
                    </p>
                </div>
            </div>


        </div>

    {{-- TITLE HEADER DIVISION --}}
       <div class="w-full text-center shadow-sm mb-10 mt-10 bg-white p-10 text-3xl">
            <h1>Ministry Courses</h1>
       </div>

    {{-- ROWS  --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- CARDS 1--}}
        
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-indigo-600">
                       Christian Spirituality
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: CF10
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        
                        CHRISTIAN SPIRITUALITY - This course provides a historical, biblical, and theological foundation for spiritual formation in the Wesleyan tradition. Students learn about personal discipleship processes and how they can practice and develop them in their lives. They study and apply the spiritual disciplines using a Wesleyan worldview, with emphasis on the development of prayer life, meditation, fasting, Bible study, service, and worship.     
                    </p>
                </div>
            </div>


             {{-- CARDS 2--}}
        
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-green-600">
                       Homiletics
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: PM11
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                        HOMILETICS - This course introduces the processes and skills necessary for effective communication both orally and in writing, the transactional process of public speaking, and a variety of communication methods. Students learn the principles of understanding and adapting to the audience, identifying the communication purpose, organizing discourse to accomplish that purpose, developing and supporting the main idea with specific data, and revising, practicing, and preparing multi-media communication to various audiences.     
                    </p>
                </div>
            </div>

             {{-- CARDS 3--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-purple-600">
                       Theology and Practical of Worship
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: PM11
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       THEOLOGY AND PRACTICE OF WORSHIP - This course introduces students to biblical, theological, historical, and pastoral perspectives on Christian liturgy. Students gain a basic knowledge of the biblical and theological foundations of worship, as well as an understanding of the major historical developments in Christian liturgy (especially in their own tradition and context). They have an opportunity to learn about significant issues in contemporary Christian worship.      
                    </p>
                </div>
            </div>

               {{-- CARDS 4--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-red-600">
                       Theology of Ministry
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: PM20
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       THEOLOGY AND PRACTICE OF WORSHIP - This course introduces students to biblical, theological, historical, and pastoral perspectives on Christian liturgy. Students gain a basic knowledge of the biblical and theological foundations of worship, as well as an understanding of the major historical developments in Christian liturgy (especially in their own tradition and context). They have an opportunity to learn about significant issues in contemporary Christian worship.      
                    </p>
                </div>
            </div>

            {{-- CARDS 5--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-yellow-600">
                       Principles of Leadership
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: LE10
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       PRINCIPLES OF LEADERSHIP - This course explores God’s intention for Christian leaders by examining positive and negative examples in the Bible. Leadership principles are identified that can be applied to students’ context of ministry. Students learn about leadership styles, organizational structures, women in ministry, and transformative values. They develop leadership skills that can be used in the care of others, including a local congregation.     
                    </p>
                </div>
            </div>


             {{-- CARDS 6--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-indigo-600">
                       Community Engagement
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: PR20
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       COMMUNITY ENGAGEMENT - The course studies the methods and ways of analyzing the community and building relationships with the people who live in it. Students discover and classify the different elements and needs that impact the life of the community and how the church can facilitate a positive change.
                       Information is gathered and a community engagement plan created that will benefit the individual, the church, and the community.      
                    </p>
                </div>
            </div>

               {{-- CARDS 7--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-green-600">
                       Evangelism and Discipleship
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: IS10
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       EVANGELISM AND DISCIPLESHIP - This course teaches students methods of evangelism and biblical principles of disciple-making. Students learn how to make Christlike disciples who make more Christlike disciples. Students learn how to guide people from not-yet-believers to growing in their relationship with Jesus. Theology, practice, and character development are key components of the course.      
                    </p>
                </div>
            </div>


              {{-- CARDS 7--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-purple-600">
                       World Religions and Apologetic
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: IS30
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       WORLD RELIGIONS AND APOLOGETICS -  This course compares the different belief systems between world religions (including the major cults) and Christianity about origins, morality, meaning, hopes, destiny, and worship practices, especially during major life transitions. world religions (including the major cults) and Christianity. Students learn biblical truths that counter the claims of other religions and different methodologies and character qualities needed in responding to them. Students are encouraged to understand and build bridges in loving ways to the religions of their own context.      
                    </p>
                </div>
            </div>

             {{-- CARDS 8--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-red-600">
                       Church Planting and Growth
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: IS40
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       CHURCH PLANTING AND GROWTH -  This course applies biblical, theological, and historical methods of starting new churches and helping them grow to maturity. With this last step of disciple making, students learn how to gather people and train them in the ministries needed to have a healthy and growing church. The spiritual and social factors of leadership are emphasized since character is one of the major influences upon others. Different contexts for church planting are explored, including urban (city) communities, rural communities, and villages.       
                    </p>
                </div>
            </div>


            
             {{-- CARDS 9--}}
            <div x-data="{ open: false }" class="bg-white rounded-2xl shadow p-6 cursor-pointer">
                <div @click="open = !open">
                    <h2 class="text-lg font-semibold text-yellow-600">
                       Christian Education
                    </h2>
                    <p class="text-sm text-gray-500">
                        Course Code: CE10
                    </p>
                </div>
                <div x-show="open" x-transition class="mt-4 text-sm text-gray-700">
                    <p>
                       FOUNDATIONS OF CHRISTIAN EDUCATION -  This course is a study of the principles, philosophies, objectives, methods, and importance of Christian education. It explores the history and biblical foundations of Christian Education and the different philosophies of education and their implications to Christian education. Focus is given to developing disciples in local church ministries who are able to teach more people about Jesus.        
                    </p>
                </div>
            </div>


    </div>

<!-- CTA -->
        <div class="text-center mt-16">
            <a href="/downloads"
               class="inline-block bg-red-600 text-white px-6 py-3 rounded-xl text-lg hover:bg-red-700 transition">
                Enroll Now
            </a>
        </div>

    </div>
</x-app>