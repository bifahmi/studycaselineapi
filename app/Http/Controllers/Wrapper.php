<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function push()
    {
        $json = Http::withToken('oCvhQok4wW0UDNd8kvA8Tz8Gd7OKWfS7oVAXklvFQcbTReUO5B3U3fEImJWapPgpLrFF4b+UUiFmgiiUR3nX9nUaCUBQQSPI/cUMKajv++g0ZhzflDa6AYJYPc6CUOsoKOVfUX51ASJOKC9o1dk0NwdB04t89/1O/w1cDnyilFU=')
            -> withbody(json_encode(value: [
    'to'=> 'U566af72f851bf1cd5d12f9b0f59600c3',
    'messages'=> ["type" => "text",
            "text" => "Hello, world1"]
]), 'application/json') ->post('https://api.line.me/v2/bot/message/push')->json();
        return response()->json($json);
    }
    public function profile($userId)
    {
        $json = Http::withToken('oCvhQok4wW0UDNd8kvA8Tz8Gd7OKWfS7oVAXklvFQcbTReUO5B3U3fEImJWapPgpLrFF4b+UUiFmgiiUR3nX9nUaCUBQQSPI/cUMKajv++g0ZhzflDa6AYJYPc6CUOsoKOVfUX51ASJOKC9o1dk0NwdB04t89/1O/w1cDnyilFU=')->get('https://api.line.me/v2/bot/profile/'.$userId)->json();
        return response()->json($json);
    }
    public function getlist()
    {
        $json = Http::withToken('oCvhQok4wW0UDNd8kvA8Tz8Gd7OKWfS7oVAXklvFQcbTReUO5B3U3fEImJWapPgpLrFF4b+UUiFmgiiUR3nX9nUaCUBQQSPI/cUMKajv++g0ZhzflDa6AYJYPc6CUOsoKOVfUX51ASJOKC9o1dk0NwdB04t89/1O/w1cDnyilFU=')->get('https://api.line.me/v2/bot/followers/ids')->json();
        return response()->json($json);
    }
    public function richmenu()
    {
        $json = Http::withToken('oCvhQok4wW0UDNd8kvA8Tz8Gd7OKWfS7oVAXklvFQcbTReUO5B3U3fEImJWapPgpLrFF4b+UUiFmgiiUR3nX9nUaCUBQQSPI/cUMKajv++g0ZhzflDa6AYJYPc6CUOsoKOVfUX51ASJOKC9o1dk0NwdB04t89/1O/w1cDnyilFU=')->get('https://api.line.me/v2/bot/richmenu/list')->json();
        return response()->json($json);
    }
    public function link($userId)
    {
        $json = Http::withToken('oCvhQok4wW0UDNd8kvA8Tz8Gd7OKWfS7oVAXklvFQcbTReUO5B3U3fEImJWapPgpLrFF4b+UUiFmgiiUR3nX9nUaCUBQQSPI/cUMKajv++g0ZhzflDa6AYJYPc6CUOsoKOVfUX51ASJOKC9o1dk0NwdB04t89/1O/w1cDnyilFU=')->post('https://api.line.me/v2/bot/user/'.$userId.'/linkToken')->json();
        return response()->json($json);
    }
}
