
var quote = new Array(17);
quote[0] = "Every time you recall a memory or have a new thought, you are creating a new connection in your brain.";
quote[1] = "10 to 23 is the number of watts of power your brain generates when you&#39;re awake (that&#39;s enough to turn on a light bulb!).";
quote[2] = "100 billion is the number of neurons in your brain.";
quote[3] = "Stronger, more intense emotional connections are linked to memories prompted by scent.";
quote[4] = "Cherish your sleep because that&#39;s probably the best time for your brain to file away all the memories of the day.";
quote[5] = "The hippocampus is a region of the brain that is heavily associated with memory.";
quote[6] = "Most short-term memories only last 20 to 30 seconds.";
quote[7] = "Forgetting can occur for many reasons, including interference from other memories.";
quote[8] = "Films Containing Depictions of Amnesia: Robocop &#40;1987&#41;, Regarding Henry &#40;1991&#41;, The English Patient &#40;1996&#41;, Momento &#40;2001&#41;, The Bourne Identity, 50 First Dates &#40;2004&#41;, and Finding Nemo &#40;2003&#41";
quote[9] = "The entire human genome, 810MB worth of data, can be put on a 1GB flash drive."
quote [10] = "A goldfish has a memory span of three seconds.";
quote [11] = "&ldquo;When I was younger, I could remember anything, whether it had happened or not.&rdquo; Mark Twain";
quote [12] = "&ldquo;Things that were hard to bear are sweet to remember.&rdquo; Lucius Annaeus Seneca";
quote [13] = "&ldquo;Of what significance are the things you can forget.&rdquo; Henry David Thoreau";
quote [14] = "&ldquo;The heart&#39;s memory eliminates the bad and magnifies the good.&rdquo; Gabriel Garc&#237a M&#224;rquez";
quote [15] = "&ldquo;A good memory is one trained to forget the trivial.&rdquo; Clifton Fadiman";
quote [16] = "&ldquo;Every man&#39;s memory is his private literature.&rdquo; Aldous Huxley";

var index = Math.floor(Math.random()*quote.length);
document.write ("<center><table width=90%   cellpadding=2 cellspacing=0><tr><td>" + quote[index] +"</td></td></table></center>");
