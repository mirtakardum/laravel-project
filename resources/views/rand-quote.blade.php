<!DOCTYPE html>
<html>
<body>
    <div style="text-align: center; margin-top: 50px;">
        @if($quote)
            <blockquote>
                <p>{{ $quote->text }}</p>
            </blockquote>
        @else
            <p>No quote available at the moment.</p>
        @endif
    </div>
</body>
</html>